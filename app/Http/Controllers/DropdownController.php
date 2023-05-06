<?php

namespace App\Http\Controllers;

use App\Models\Kabupaten;
use App\Models\Kecamatan;
use App\Models\Kelurahan;
use Illuminate\Http\Request;

class DropdownController extends Controller
{
    public function index()
    {
        $data['kabupatens'] = Kabupaten::get(["nama", "id"]);
        return view('dropdown.index', $data);
    }

    public function fetchKecamatan(Request $request)
    {
        $data['kecamatans'] = Kecamatan::where("kabupaten_id", $request->kabupaten_id)
            ->get(["nama", "id"]);

        return response()->json($data);
    }

    public function fetchKelurahan(Request $request)
    {
        $data['kelurahans'] = Kelurahan::where("kecamatan_id", $request->kecamatan_id)
            ->get(["nama", "id"]);

        return response()->json($data);
    }
}
