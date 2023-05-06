<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $members = Member::all();
        $collection = collect(Member::class::all());
        $members = $collection->whereNull('parent_id');
        return view('members.index', compact('members'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('members.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nik'               => 'required|unique:members',
            'fullname'          => 'required|max:128',
            'alamat'            => 'required|min:6|max:128',
            'kampung'           => 'required|min:6|max:128',
            'scanktp'           => 'required|image|mimes:jpeg,png,jpg|max:1024',
            'nohp'              => 'required|max:16',
            'keterangan'        => 'required|min:6|max:128'
        ]);

        if ($request->hasFile('scanktp')) {
            $scanktp = $request->file('scanktp');
            $namaktp = $request->nik . "-" . $scanktp->hashName();
            $scanktp->storeAs('public/dataktp', $namaktp);
            Member::create([
                'nik'               => $request->nik,
                'fullname'          => $request->fullname,
                'alamat'            => $request->alamat,
                'kampung'           => $request->kampung,
                'scanktp'           => $namaktp,
                'nohp'              => $request->nohp,
                'keterangan'        => $request->keterangan,
                'user_id'           => Auth::id(),
            ]);
        }

        return redirect()->route('members.index')->with('message', 'Member successfully Created');
    }

    /**
     * Display the specified resource.
     */
    public function show(Member $member)
    {
        return view('members.show', compact('member'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function relation(Member $member)
    {
        return view('members.relation', compact('member'));
    }

    public function storerelation(Request $request)
    {
        $request->validate([
            'parent_id'         => 'required',
            'nik'               => 'required|unique:members',
            'fullname'          => 'required|max:128',
            'alamat'            => 'required|min:6|max:128',
            'kampung'           => 'required|min:6|max:128',
            'scanktp'           => 'required|image|mimes:jpeg,png,jpg|max:1024',
            'nohp'              => 'required|max:16',
            'keterangan'        => 'required|min:6|max:128'
        ]);

        if ($request->hasFile('scanktp')) {
            $scanktp = $request->file('scanktp');
            $namaktp = $request->nik . "-" . $scanktp->hashName();
            $scanktp->storeAs('public/dataktp', $namaktp);
            Member::create([
                'parent_id'         => $request->parent_id,
                'nik'               => $request->nik,
                'fullname'          => $request->fullname,
                'alamat'            => $request->alamat,
                'kampung'           => $request->kampung,
                'scanktp'           => $namaktp,
                'nohp'              => $request->nohp,
                'keterangan'        => $request->keterangan,
                'user_id'           => Auth::id(),
            ]);
        }

        return redirect()->route('members.index')->with('message', 'Member successfully Created');
    }

    public function search(Request $request)
    {
        $members = Member::query()
            ->when(
                $request->search,
                function (Builder $builder) use ($request) {
                    $builder->where('nik', 'like', "%{$request->search}%")
                        ->orWhere('fullname', 'like', "%{$request->search}%");
                }
            )
            ->simplePaginate(5);
        return view('members.index', compact('members'));
    }
}
