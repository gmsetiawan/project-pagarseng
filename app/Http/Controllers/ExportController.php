<?php

namespace App\Http\Controllers;

use App\Models\Kabupaten;
use App\Models\Kecamatan;
use App\Models\Kelurahan;
use App\Models\Location;
use App\Models\Participant;
use App\Models\Support;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Rap2hpoutre\FastExcel\FastExcel;
use Rap2hpoutre\FastExcel\SheetCollection;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\File;

class ExportController extends Controller
{
    public function exportSupport()
    {
        $filename = 'project-gideon ' . now() . '.xlsx';
        $supports = Support::with(['kabupaten', 'kecamatan', 'kelurahan', 'location', 'children', 'participant', 'user'])->get();
        $sheets = new SheetCollection([
            'Result' => $supports->map(function ($support) {
                $children = $support->children->pluck('nama')->implode(', ');
                return [
                    'ID' => $support->id,
                    'NIK' => $support->nik,
                    'Nama' => $support->nama,
                    'Alamat' => $support->alamat,
                    'RT' => $support->rt,
                    'No Handphone' => $support->nohp,
                    'Kabupaten' => $support->kabupaten->nama,
                    'Kecamatan' => $support->kecamatan->nama,
                    'Kelurahan' => $support->kelurahan->nama,
                    'TPS' => $support->location == null ? '' : $support->location->nama,
                    'Info' => $support->children ? $children : null,
                    'Image' => $support->scanktp,
                    'Rating' => $support->rating,
                    'Keterangan' => $support->keterangan,
                    'Sumber Data' => $support->participant->nama,
                    'User' => $support->user->name,
                ];
            }),

            'Support' => $supports->map(function ($support) {
                $children = $support->children->pluck('id')->implode(', ');
                return [
                    'ID' => $support->id,
                    'NIK' => $support->nik,
                    'Nama' => $support->nama,
                    'Alamat' => $support->alamat,
                    'RT' => $support->rt,
                    'No Handphone' => $support->nohp,
                    'Kabupaten' => $support->kabupaten->id,
                    'Kecamatan' => $support->kecamatan->id,
                    'Kelurahan' => $support->kelurahan->id,
                    'TPS' => $support->location == null ? '' : $support->location->id,
                    'Info' => $support->children ? $children : null,
                    'Image' => $support->scanktp,
                    'Rating' => $support->rating,
                    'Keterangan' => $support->keterangan,
                    'Sumber Data' => $support->participant->id,
                    'User' => $support->user->id,
                ];
            }),

            'Kabupaten' => Kabupaten::all(),
            'Kecamatan' => Kecamatan::all(),
            'Kelurahan' => Kelurahan::all(),
            'TPS' => Location::all(),
            'Participant' => Participant::all()

        ]);

        // (new FastExcel($sheets))->export($filename);
        // return redirect()->back()->with('success', 'Export Data Support Berhasil');

        $tempFilePath = storage_path('app/public/temp.xlsx');

        (new FastExcel($sheets))->export($tempFilePath);

        $fileStream = fopen($tempFilePath, 'r');
        $fileSize = filesize($tempFilePath);

        $response = response()->stream(function () use ($fileStream) {
            fpassthru($fileStream);
            fclose($fileStream);
        }, 200, [
            'Content-Type' => 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
            'Content-Length' => $fileSize,
            'Content-Disposition' => 'attachment; filename=' . $filename,
        ]);

        File::delete($tempFilePath);

        return $response;
    }
}
