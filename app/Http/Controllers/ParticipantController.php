<?php

namespace App\Http\Controllers;

use App\Models\Participant;
use App\Models\Support;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class ParticipantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $participants = Participant::all();
        return view('participants.index', compact('participants'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('participants.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama'              => 'required',
            'nohp'              => 'required|min:10|max:12|regex:/^([0-9\s\-\+\(\)]*)$/',
        ]);

        Participant::create([
            'nama'              => $request->nama,
            'nohp'              => $request->nohp,
        ]);

        return redirect()->route('participants.index')->with('message', 'Participant successfully Created');
    }

    /**
     * Display the specified resource.
     */
    public function show(Participant $participant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Participant $participant)
    {
        return view('participants.edit', compact('participant'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Participant $participant)
    {
        $updateparticipant = $request->validate([
            'nama'              => 'required',
            'nohp'              => 'required|min:10|max:12|regex:/^([0-9\s\-\+\(\)]*)$/',
        ]);

        $participant->update($updateparticipant);
        return redirect()->route('participants.index')->with('message', 'Participant Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Participant $participant)
    {
        if ($participant) {
            $hasRelatedSupportData = Support::where('participant_id', $participant->id)->exists();

            if ($hasRelatedSupportData) {
                return back()->with('success', 'User has related supports and cannot be deleted');
            }

            $participant->delete();

            return back()->with('success', 'Participant Successfully Deleted');
        }
    }

    public function search(Request $request)
    {
        $participants = Participant::query()
            ->when(
                $request->search,
                function (Builder $builder) use ($request) {
                    $builder->where('nama', 'like', "%{$request->search}%")
                        ->orWhere('nohp', 'like', "%{$request->search}%");
                }
            )
            ->get();
        return view('participants.search', compact('participants'));
    }
}
