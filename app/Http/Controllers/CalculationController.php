<?php

namespace App\Http\Controllers;

use App\Models\Kecamatan;
use App\Models\Kelurahan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CalculationController extends Controller
{
    public function showallKecamatan()
    {
        $kecamatans = Kecamatan::withCount('supports')->get();
        $kecratings = DB::table('supports')
            ->select('kecamatan_id', DB::raw('sum(rating) as sum_rating'), DB::raw('count(*) as rating_count'))
            ->groupBy('kecamatan_id')
            ->get();

        return view('calculations.showkecamatan', compact('kecamatans', 'kecratings'));
    }

    public function showallKelurahan()
    {
        $kelurahans = Kelurahan::withCount('supports')->get();
        $kelratings = DB::table('supports')
            ->select('kelurahan_id', DB::raw('sum(rating) as sum_rating'), DB::raw('count(*) as rating_count'))
            ->groupBy('kelurahan_id')
            ->paginate(20);

        return view('calculations.showkelurahan', compact('kelurahans', 'kelratings'));
    }
}
