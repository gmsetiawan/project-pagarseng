<?php

namespace App\Http\Controllers;

use App\Models\Kecamatan;
use App\Models\Kelurahan;
use App\Models\Participant;
use App\Models\Support;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $kecamatans = Kecamatan::withCount('supports')->take(5)->get();
        $kecratings = DB::table('supports')
            ->select('kecamatan_id', DB::raw('sum(rating) as sum_rating'), DB::raw('count(*) as rating_count'))
            ->groupBy('kecamatan_id')
            ->take(5)->get();

        $kelurahans = Kelurahan::withCount('supports')->take(5)->get();
        $kelratings = DB::table('supports')
            ->select('kelurahan_id', DB::raw('sum(rating) as sum_rating'), DB::raw('count(*) as rating_count'))
            ->groupBy('kelurahan_id')
            ->take(5)->get();

        $participants = Participant::withCount('supports')->take(5)->get();

        return view('dashboard', compact('kecamatans', 'kelurahans', 'participants', 'kecratings', 'kelratings'));
    }
}
