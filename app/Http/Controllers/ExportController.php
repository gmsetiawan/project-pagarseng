<?php

namespace App\Http\Controllers;

use App\Models\Kabupaten;
use App\Models\Kecamatan;
use App\Models\Kelurahan;
use App\Models\Location;
use App\Models\Participant;
use App\Models\Support;
use Illuminate\Http\Request;
use Rap2hpoutre\FastExcel\FastExcel;
use Rap2hpoutre\FastExcel\SheetCollection;

class ExportController extends Controller
{
    public function exportSupport()
    {
        $filename = 'pagarseng ' . now() . '.xlsx';
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
        (new FastExcel($sheets))->export($filename);

        return redirect()->back()->with('success', 'Export Data Support Berhasil');
    }
}
