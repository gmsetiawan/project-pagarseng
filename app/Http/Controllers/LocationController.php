<?php

namespace App\Http\Controllers;

use App\Models\Location;
use App\Models\Support;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $locations = Location::all();
        return view('locations.index', compact('locations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('locations.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama'              => 'required',
            'alamat'            => 'required|max:128',
        ]);

        Location::create([
            'nama'              => $request->nama,
            'alamat'            => $request->alamat,
        ]);

        return redirect()->route('locations.index')->with('message', 'Location Successfully Created');
    }

    /**
     * Display the specified resource.
     */
    public function show(Location $location)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Location $location)
    {
        return view('locations.edit', compact('location'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Location $location)
    {
        $updatelocation = $request->validate([
            'nama'              => 'required',
            'alamat'            => 'required|max:128',
        ]);

        $location->update($updatelocation);
        return redirect()->route('locations.index')->with('message', 'Location Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Location $location)
    {
        if ($location) {
            $hasRelatedSupportData = Support::where('location_id', $location->id)->exists();

            if ($hasRelatedSupportData) {
                return back()->with('success', 'User has related supports and cannot be deleted');
            }

            $location->delete();

            return back()->with('success', 'Location Successfully Deleted');
        }
    }

    public function search(Request $request)
    {
        $locations = Location::query()
            ->when(
                $request->search,
                function (Builder $builder) use ($request) {
                    $builder->where('nama', 'like', "%{$request->search}%")
                        ->orWhere('alamat', 'like', "%{$request->search}%");
                }
            )
            ->get();
        return view('locations.search', compact('locations'));
    }
}
