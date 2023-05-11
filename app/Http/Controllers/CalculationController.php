<?php

namespace App\Http\Controllers;

use App\Models\Kecamatan;
use App\Models\Kelurahan;
use App\Models\Participant;
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
        $kelurahans = Kelurahan::withCount('supports')->paginate(20);
        $kelratings = DB::table('supports')
            ->select('kelurahan_id', DB::raw('sum(rating) as sum_rating'), DB::raw('count(*) as rating_count'))
            ->groupBy('kelurahan_id')
            ->get();

        return view('calculations.showkelurahan', compact('kelurahans', 'kelratings'));
    }

    public function showallParticipant()
    {
        $participants = Participant::withCount('supports')->get();
        return view('calculations.showparticipant', compact('participants'));
    }
}
