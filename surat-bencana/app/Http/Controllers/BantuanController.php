<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kecamatan;
use App\Models\Kelurahan;
use App\Models\Bantuan;
use App\Models\DetailBantuan;
use App\Models\Bencana;
use App\Models\Keluarga;
use App\Models\Identitas;
use RealRashid\SweetAlert\Facades\Alert;

class BantuanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $detailBantuans = DetailBantuan::with('bantuan.bencana.keluarga')->get();

        return view('admin.bantuan', compact('detailBantuans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    // public function create()
    // {
    //     // $bencanas = Bantuan::with('bencana')->get();
    //     $detailBantuans = DetailBantuan::with('bantuan.bencana.keluarga')->get();
    //     return view('admin.tambahBantuan', compact('detailBantuans'));
    // }

    public function create()
    {
        $kecamatan = Kecamatan::all();
        return view('admin.tambahBantuan', compact('kecamatan'));
    }

    public function getKelurahan(Request $request)
    {
        $kelurahan = Kelurahan::where("id_kecamatan", $request->kecamatanID)->pluck('nama_kelurahan', 'id');

        return response()->json($kelurahan);
    }

    public function getKeluarga(Request $request)
    {
        $keluarga = Keluarga::where("id_kelurahan", $request->kelurahanID)->select('id', 'no_kk', 'alamat')->get();

        return response()->json($keluarga);
    }

    public function getBencana(Request $request)
    {
        $bencana = Bencana::where("id_keluarga", $request->keluargaID)->pluck('jns_bencana', 'id');
        return response()->json($bencana);
    }

    public function getBantuan(Request $request)
    {
        $bantuan = Bantuan::where("id_bencana", $request->bencanaID)->pluck('jns_bantuan', 'id');
        return response()->json($bantuan);
    }

    // public function getBencana($keluargaID)
    // {
    //     $bencanas = Keluarga::find($keluargaID)->bencanas;
    //     return response()->json($bencanas);
    // }

    // public function getBantuan($bencanaID)
    // {
    //     $bantuans = Bencana::find($bencanaID)->bantuans;
    //     return response()->json($bantuans);
    // }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'jns_bantuan' => 'required',
            'id_bencana' => 'required|integer',
        ]);

        $bantuan = Bantuan::create([
            'jns_bantuan' => $request->jns_bantuan,
            'id_bencana' => $request->id_bencana,
        ]);

        $bantuan->save();

        // dd($bantuan);

        if($bantuan) {
            toast('Bantuan Berhasil Dibuat','success');
            return redirect()->route('bantuan')->with('success', 'Data bantuan berhasil dibuat.');
        } else {
            toast('Bantuan Gagal Dibuat','error');
            return redirect()->route('bantuan')->with('success', 'Data bantuan gagal dibuat.');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $bantuan = Bantuan::findOrFail($id);
        $bantuans = Bantuan::all();
        return view('admin.bantuan', compact('bantuan', 'bantuans'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $bantuan = Bantuan::findOrFail($id);

        $request->validate([
            'jns_bantuan' => 'required',
        ]);

        $bantuan->jns_bantuan = $request->jns_bantuan;

        $bantuan->save();
        // dd($bantuan);

        if($bantuan) {
            toast('Bantuan Berhasil Diupdate','success');
            return redirect()->route('bantuan')->with('success', 'Data bantuan berhasil diperbarui.');
        } else {
            toast('Bantuan Gagal Diupdate','error');
            return redirect()->route('bantuan')->with('success', 'Data bantuan gagal diperbarui.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        $bantuan = Bantuan::findOrFail($id);
        $bantuan->delete();

        if($bantuan) {
            toast('Bantuan Berhasil Dihapus','success');
            return redirect()->route('bantuan')->with('success', 'Data bantuan berhasil dihapus.');
        } else {
            toast('Bantuan Gagal Dihapus','error');
            return redirect()->route('bantuan')->with('success', 'Data bantuan gagal dihapus.');
        }
    }
}
