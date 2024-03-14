<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelurahan;
use App\Models\Kecamatan;
use App\Models\User;
use RealRashid\SweetAlert\Facades\Alert;

use App\Events\ModelCreated;
use App\Events\ModelDeleted;
use App\Events\ModelUpdated;

class KelurahanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kelurahans = Kelurahan::with('kecamatan')->get();
        // dd($kelurahans);
        return view('admin.kelurahan', ['kelurahans' => $kelurahans]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $kelurahan = Kelurahan::findOrFail($id);
        $kelurahans = Kelurahan::all();
        return view('admin.kelurahan', compact('kelurahan', 'kelurahans'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $kelurahan = Kelurahan::findOrFail($id);

        $request->validate([
            'nip_lurah' => 'required',
            'nama_lurah' => 'required',
            'nama_kelurahan' => 'required',
        ]);

        $kelurahan->nip_lurah = $request->nip_lurah;
        $kelurahan->nama_lurah = $request->nama_lurah;
        $kelurahan->nama_kelurahan = $request->nama_kelurahan;

        $kelurahan->save();

        // $kelurahans = Kelurahan::all();

        if($kelurahan) {
            toast('Kelurahan Berhasil Diupdate','success');
            return redirect()->route('kelurahan')->with('success', 'Data kelurahan berhasil diupdate.');
        } else {
            toast('Kelurahan Gagal Diupdate','error');
            return redirect()->route('kelurahan')->with('success', 'Data kelurahan gagal diupdate.');
        }

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
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
}
