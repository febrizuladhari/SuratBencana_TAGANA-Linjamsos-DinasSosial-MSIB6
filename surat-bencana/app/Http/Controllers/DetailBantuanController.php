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
use App\Models\User;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;

use App\Events\ModelCreated;
use App\Events\ModelDeleted;
use App\Events\ModelUpdated;


class DetailBantuanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $detailBantuans = DetailBantuan::with('bantuan.bencana.keluarga')->get();

        return view('admin.detailBantuan', compact('detailBantuans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kecamatan = Kecamatan::all();

        return view('admin.tambahDetailBantuan', ['kecamatan' => $kecamatan]);
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


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_bantuan' => 'required',
            'deskripsi' => 'required',
            'jumlah' => 'required',
        ]);

        $detailBantuan = DetailBantuan::create([
            'id_bantuan' => $request->id_bantuan,
            'deskripsi' => $request->deskripsi,
            'jumlah' => $request->jumlah,
        ]);

        event(new ModelCreated($detailBantuan, auth()->user()));

        // dd($detailBantuan);
        $detailBantuan->save();


        if($detailBantuan) {
            toast('Detail Bantuan Berhasil Dibuat','success');
            return redirect()->route('detailBantuan')->with('success', 'Data detail bantuan berhasil dibuat.');
        } else {
            toast('Detail Bantuan Gagal Dibuat','error');
            return redirect()->route('detailBantuan')->with('success', 'Data detail bantuan gagal dibuat.');
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
    public function edit(string $id)
    {

        $detailBantuan = DetailBantuan::findOrFail($id);
        $detailBantuans = DetailBantuan::all();
        return view('admin.detailBantuan', compact('detailBantuan', 'detailBantuans'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $detailBantuan = DetailBantuan::findOrFail($id);

        $request->validate([
            'deskripsi' => 'required',
            'jumlah' => 'required',
        ]);

        $detailBantuan->deskripsi = $request->deskripsi;
        $detailBantuan->jumlah = $request->jumlah;


        $detailBantuan->save();
        // dd($detailBantuan);

        if($detailBantuan) {
            toast('Detail Bantuan Berhasil Diupdate','success');
            return redirect()->route('detailBantuan')->with('success', 'Data detail bantuan berhasil diperbarui.');
        } else {
            toast('Detail Bantuan Gagal Diupdate','error');
            return redirect()->route('detailBantuan')->with('success', 'Data detail bantuan gagal diperbarui.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $detailBantuan = DetailBantuan::findOrFail($id);

        event(new ModelDeleted($detailBantuan, auth()->user()));

        $detailBantuan->delete();

        if($detailBantuan) {
            toast('Detail Bantuan Berhasil Dihapus','success');
            return redirect()->route('detailBantuan')->with('success', 'Data detail bantuan berhasil dihapus.');
        } else {
            toast('Detail Bantuan Gagal Dihapus','error');
            return redirect()->route('detailBantuan')->with('success', 'Data detail bantuan gagal dihapus.');
        }
    }
}
