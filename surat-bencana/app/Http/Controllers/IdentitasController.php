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

class IdentitasController extends Controller
{
    public function index()
    {
        $identitas = Identitas::get();

        return view('admin.identitas', ['identitas' => $identitas]);
    }


    public function edit($id)
    {
        $identitas = Identitas::findOrFail($id);
        return view('admin.identitas', compact('identitas'));
    }

    public function update(Request $request, $id)
    {
        $identitas = Identitas::findOrFail($id);

        $request->validate([
            'nama' => 'required',
            'nik' => 'required',
            'status' => 'required',
            'kehamilan' => 'required',
            'usia' => 'required',
            'jns_kelamin' => 'required'
        ]);

        $identitas->nama = $request->nama;
        $identitas->nik = $request->nik;
        $identitas->status = $request->status;
        $identitas->kehamilan = $request->kehamilan;
        $identitas->usia = $request->usia;
        $identitas->jns_kelamin = $request->jns_kelamin;

        $identitas->save();

        if($identitas) {
            toast('Identitas Berhasil Diupdate','success');
            return redirect()->route('identitas')->with('success', 'Data identitas berhasil diupdate.');
        } else {
            toast('Identitas Gagal Diupdate','error');
            return redirect()->route('identitas')->with('success', 'Data identitas gagal diupdate.');
        }

    }

    public function create()
    {
        $identitas = Identitas::all();
        $kecamatan = Kecamatan::all();

        return view('admin.tambahIdentitas', compact('identitas', 'kecamatan'));
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

    public function getKehamilan($selectedStatus)
    {
        if ($selectedStatus == 'Istri') {
            $options = ['Hamil' => 'Hamil', 'Tidak Hamil' => 'Tidak Hamil'];
        } else {
            $options = [];
        }

        return response()->json($options);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nik' => 'required',
            'nama' => 'required',
            'status' => 'required',
            'kehamilan' => 'required',
            'usia' => 'required',
            'jns_kelamin' => 'required',
            'no_kk' => 'required',
        ]);

        $tambahIdentitas = Identitas::create([
            'nik' => $request->nik,
            'nama' => $request->nama,
            'status' => $request->status,
            'kehamilan' => $request->kehamilan,
            'usia' => $request->usia,
            'jns_kelamin' => $request->jns_kelamin,
            'no_kk' => $request->no_kk,
        ]);

        // dd($tambahIdentitas);
        $tambahIdentitas->save();


        if($tambahIdentitas) {
            toast('Identitas Berhasil Dibuat','success');
            return redirect()->route('identitas')->with('success', 'Data identitas berhasil dibuat.');
        } else {
            toast('Identitas Gagal Dibuat','error');
            return redirect()->route('identitas')->with('success', 'Data identitas gagal dibuat.');
        }
    }


}
