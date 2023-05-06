<?php

namespace App\Http\Controllers;

use App\Models\Kecamatan;
use App\Models\Kelurahan;
use App\Models\Participant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $kecamatans = Kecamatan::withCount('supports')->get();
        $ratings = DB::table('supports')
            ->select('kecamatan_id', DB::raw('avg(rating) as average_rating'), DB::raw('count(*) as rating_count'))
            ->groupBy('kecamatan_id')
            ->get();

        $kelurahans = Kelurahan::withCount('supports')->get();
        $participants = Participant::withCount('supports')->get();

        return view('dashboard', compact('kecamatans', 'kelurahans', 'participants', 'ratings'));
    }
}
