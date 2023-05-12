<?php

namespace App\Http\Controllers;

use App\Http\Requests\SupportUpdateRequest;
use App\Models\Kabupaten;
use App\Models\Kecamatan;
use App\Models\Kelurahan;
use App\Models\Location;
use App\Models\Participant;
use App\Models\Support;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

use function PHPUnit\Framework\isEmpty;

class SupportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $totalData = Support::all();
        $collection = collect(Support::class::all());
        // $supports = $collection->whereNull('parent_id')->paginate();
        $supports =  Support::whereNull('parent_id')->orderBy('id', 'asc')->paginate(10);

        return view('supports.index', compact('supports', 'totalData'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $locations = Location::all();
        $participants = Participant::all();
        $kabupatens = Kabupaten::get(["nama", "id"]);
        return view('supports.create', compact('locations', 'participants', 'kabupatens'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nik'               => 'required|unique:supports|min:16|max:16',
            'nama'              => 'required|max:128',
            'alamat'            => 'required|max:128',
            'rt'                => 'required|min:1|max:2|regex:/^([0-9\s\-\+\(\)]*)$/',
            'kabupaten'         => 'required',
            'kecamatan'         => 'required',
            'kelurahan'         => 'required',
            'scanktp'           => 'image|mimes:jpeg,png,jpg|max:1024',
            'nohp'              => 'required|min:10|max:12|regex:/^([0-9\s\-\+\(\)]*)$/',
            'keterangan'        => 'nullable|max:128',
            'rating'            => 'required',
            'location'          => 'nullable',
            'participant'       => 'required',
        ]);

        if ($request->hasFile('scanktp')) {
            $scanktp = $request->file('scanktp');
            $namaktp = $request->nik . "-" . $scanktp->hashName();
            $scanktp->storeAs('public/dataktp', $namaktp);
            Support::create([
                'nik'               => $request->nik,
                'nama'              => $request->nama,
                'alamat'            => $request->alamat,
                'rt'                => $request->rt,
                'kabupaten_id'      => $request->kabupaten,
                'kecamatan_id'      => $request->kecamatan,
                'kelurahan_id'      => $request->kelurahan,
                'scanktp'           => $namaktp,
                'nohp'              => $request->nohp,
                'keterangan'        => $request->keterangan,
                'rating'            => $request->rating,
                'location_id'       => $request->location,
                'participant_id'    => $request->participant,
                'user_id'           => Auth::id(),
            ]);
        } else {
            Support::create([
                'nik'               => $request->nik,
                'nama'              => $request->nama,
                'alamat'            => $request->alamat,
                'rt'                => $request->rt,
                'kabupaten_id'      => $request->kabupaten,
                'kecamatan_id'      => $request->kecamatan,
                'kelurahan_id'      => $request->kelurahan,
                'nohp'              => $request->nohp,
                'keterangan'        => $request->keterangan,
                'rating'            => $request->rating,
                'location_id'       => $request->location,
                'participant_id'    => $request->participant,
                'user_id'           => Auth::id(),
            ]);
        }

        return redirect()->route('supports.index')->with('success', 'Support Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Support $support)
    {
        $families = Support::query()
            ->when(
                $support->id,
                function (Builder $builder) use ($support) {
                    $builder->Where('parent_id', $support->id);
                }
            )
            ->get();
        $family = Support::where('id', $support->parent_id)->first();
        return view('supports.show', compact('support', 'families', 'family'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Support $support)
    {
        $locations = Location::all();
        $participants = Participant::all();
        $kabupatens = Kabupaten::get(["nama", "id"]);
        $kecamatans = Kecamatan::where('kabupaten_id', $support->kabupaten_id)->get();
        $kelurahans = Kelurahan::where('kecamatan_id', $support->kecamatan_id)->get();
        $family = Support::where('id', $support->parent_id)->first();
        return view('supports.edit', compact('support', 'locations', 'participants', 'kabupatens', 'kecamatans', 'kelurahans', 'family'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SupportUpdateRequest $request, Support $support)
    {
        $updateSupport = $request->validated();

        if ($request->hasFile('scanktp')) {
            $scanktp = $request->file('scanktp');
            $namaktp = $request->nik . "-" . $scanktp->hashName();
            $scanktp->storeAs('public/dataktp', $namaktp);

            //delete old image
            Storage::delete('public/dataktp/' . $support->scanktp);

            $updateSupport['nik'] = $request->nik;
            $updateSupport['nama'] = $request->nama;
            $updateSupport['alamat'] = $request->alamat;
            $updateSupport['rt'] = $request->rt;
            $updateSupport['kabupaten_id'] = $request->kabupaten;
            $updateSupport['kecamatan_id'] = $request->kecamatan;
            $updateSupport['kelurahan_id'] = $request->kelurahan;
            $updateSupport['scanktp'] = $namaktp;
            $updateSupport['nohp'] = $request->nohp;
            $updateSupport['keterangan'] = $request->keterangan;
            $updateSupport['rating'] = $request->rating;
            $updateSupport['location_id'] = $request->location;
            $updateSupport['participant_id'] = $request->participant;
            $updateSupport['user_id'] = Auth::id();

            $support->update($updateSupport);
        } else {
            $updateSupport['nik'] = $request->nik;
            $updateSupport['nama'] = $request->nama;
            $updateSupport['alamat'] = $request->alamat;
            $updateSupport['rt'] = $request->rt;
            $updateSupport['kabupaten_id'] = $request->kabupaten;
            $updateSupport['kecamatan_id'] = $request->kecamatan;
            $updateSupport['kelurahan_id'] = $request->kelurahan;
            $updateSupport['nohp'] = $request->nohp;
            $updateSupport['keterangan'] = $request->keterangan;
            $updateSupport['rating'] = $request->rating;
            $updateSupport['location_id'] = $request->location;
            $updateSupport['participant_id'] = $request->participant;
            $updateSupport['user_id'] = Auth::id();

            $support->update($updateSupport);
        }

        return redirect()->route('supports.index')->with('success', 'Support Berhasil Diperbaharui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Support $support)
    {
        $checkGroupHead = Support::where('id', $support->id)->has('children')->first();

        if ($checkGroupHead) {
            return redirect()->route('supports.index')->with('success', 'Group Head Tidak Dapat Dihapus Karena Terelasi Dengan Data Support Lainnya');
        } else {
            if ($support->scanktp !== "example.jpg") {
                Storage::delete('public/dataktp/' . $support->scanktp);
            }
            $support->delete();
            return redirect()->route('supports.index')->with('success', 'Support Berhasil Dihapus');
        }
    }

    public function relation(Support $support)
    {
        $locations = Location::all();
        $participants = Participant::all();
        $kabupatens = Kabupaten::get(["nama", "id"]);
        return view('supports.relation', compact('support', 'locations', 'participants', 'kabupatens'));
    }

    public function storerelation(Request $request)
    {
        $request->validate([
            'parent_id'         => 'required',
            'nik'               => 'required|unique:supports|min:16|max:16',
            'nama'              => 'required|max:128',
            'alamat'            => 'required|max:128',
            'rt'                => 'required|min:2|max:2|regex:/^([0-9\s\-\+\(\)]*)$/',
            'kabupaten'         => 'required',
            'kecamatan'         => 'required',
            'kelurahan'         => 'required',
            'scanktp'           => 'image|mimes:jpeg,png,jpg|max:1024',
            'nohp'              => 'required|min:10|max:12|regex:/^([0-9\s\-\+\(\)]*)$/',
            'keterangan'        => 'nullable|max:128',
            'rating'            => 'required',
            'location'          => 'nullable',
            'participant'       => 'required',
        ]);

        if ($request->hasFile('scanktp')) {
            $scanktp = $request->file('scanktp');
            $namaktp = $request->nik . "-" . $scanktp->hashName();
            $scanktp->storeAs('public/dataktp', $namaktp);
            Support::create([
                'parent_id'         => $request->parent_id,
                'nik'               => $request->nik,
                'nama'              => $request->nama,
                'alamat'            => $request->alamat,
                'rt'                => $request->rt,
                'kabupaten_id'      => $request->kabupaten,
                'kecamatan_id'      => $request->kecamatan,
                'kelurahan_id'      => $request->kelurahan,
                'scanktp'           => $namaktp,
                'nohp'              => $request->nohp,
                'keterangan'        => $request->keterangan,
                'rating'            => $request->rating,
                'location_id'       => $request->location,
                'participant_id'    => $request->participant,
                'user_id'           => Auth::id(),
            ]);
        } else {
            Support::create([
                'parent_id'         => $request->parent_id,
                'nik'               => $request->nik,
                'nama'              => $request->nama,
                'alamat'            => $request->alamat,
                'rt'                => $request->rt,
                'kabupaten_id'      => $request->kabupaten,
                'kecamatan_id'      => $request->kecamatan,
                'kelurahan_id'      => $request->kelurahan,
                'nohp'              => $request->nohp,
                'keterangan'        => $request->keterangan,
                'rating'            => $request->rating,
                'location_id'       => $request->location,
                'participant_id'    => $request->participant,
                'user_id'           => Auth::id(),
            ]);
        }

        return redirect()->route('supports.index')->with('message', 'Support Berhasil Disimpan');
    }

    public function search(Request $request)
    {
        $supports = Support::query()
            ->when(
                $request->search,
                function (Builder $builder) use ($request) {
                    $builder->where('nik', 'like', "%{$request->search}%")
                        ->orWhere('nama', 'like', "%{$request->search}%");
                }
            )
            ->simplePaginate(5);
        return view('supports.search', compact('supports'));
    }

    /**
     * Display the specified resource.
     */
    public function showfamily(Support $support, Request $request)
    {
        $checkGroupHead = Support::where('id', $support->id)->has('children')->first();

        if (!$checkGroupHead) {
            return redirect()->route('supports.index');
        }

        $families = Support::query()
            ->when(
                $support->id,
                function (Builder $builder) use ($request, $support) {
                    $builder->where('id', $support->id)
                        ->orWhere('parent_id', $support->id);
                }
            )
            ->get();

        return view('supports.family', compact('families', 'checkGroupHead'));
    }

    public function removerelation(Support $support)
    {
        $checkGroupHead = Support::where('id', $support->id)->has('children')->first();
        if ($checkGroupHead) {
            return back()->with('success', 'Group Head Tidak Dapat Dihapus Karena Terelasi Dengan Data Support Lainnya');
        } else {
            $support->parent_id = null;
            $support->save();

            return back()->with('success', 'Support Berhasil Dikeluarkan Dari Group Keluarga');
        }
    }

    public function searchanggota(Request $request, Support $support)
    {
        $families = Support::query()
            ->when(
                $support->id,
                function (Builder $builder) use ($support) {
                    $builder->Where('parent_id', $support->id);
                }
            )
            ->get();
        $family = Support::where('id', $support->parent_id)->first();

        $anggota = Support::with('children')->where('nik', $request->search)->first();
        if ($anggota) {
            $checkGroupHead = Support::where('id', $anggota->id)->has('children')->first();
            return view('supports.search-anggota', compact('support', 'families', 'family', 'anggota', 'checkGroupHead'));
        } else {
            return view('supports.search-anggota', compact('support', 'families', 'family', 'anggota'));
        }
    }

    public function addanggota(Request $request, Support $support)
    {
        $add = Support::where('id', $request->id)->first();
        $families = Support::query()
            ->when(
                $support->id,
                function (Builder $builder) use ($support) {
                    $builder->Where('parent_id', $support->id);
                }
            )
            ->get();
        $family = Support::where('id', $support->parent_id)->first();
        $anggota = Support::where('nik', $request->search)->first();

        if ($add->id === $support->id) {
            return view('supports.show', compact('support', 'families', 'family', 'anggota'))->with('error', 'Rejected');
        } else {
            $add->parent_id = $support->id;
            $add->save();
            return redirect()->route('supports.show', compact('support', 'families', 'family', 'anggota'))->with('success', 'Support Berhasil Ditambahkan Ke Group Keluarga');
        }
    }

    public function searchSupportByNIK(Request $request)
    {
        $support = Support::where('nik', $request->nik)->first();
        if ($support) {
            return response()->json([
                'status' => 'success',
                'support' => $support,
            ]);
        } else {
            return response()->json([
                'status' => 'error',
                'message' => 'Support not found',
            ]);
        }
    }
}
