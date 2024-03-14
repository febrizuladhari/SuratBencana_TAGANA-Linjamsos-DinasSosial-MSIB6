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

class KeluargaController extends Controller
{
    public function index()
    {
        $keluargas = Keluarga::join('identitas', 'keluargas.no_kk', '=', 'identitas.no_kk')
        -> where('identitas.status', '=', 'Kepala Keluarga')
        ->select('keluargas.id', 'keluargas.no_kk', 'identitas.id as identitas_id', 'keluargas.alamat', 'identitas.nama')
        ->get();
        return view('admin.keluarga', ['keluargas' => $keluargas]);
    }


    public function edit($id)
    {
        $keluarga = Keluarga::findOrFail($id);
        return view('admin.keluarga', compact('keluarga'));
    }

    public function update(Request $request, $id)
        {
            $keluarga = Keluarga::findOrFail($id);
            $request->validate([
                'no_kk' => 'required',
                'alamat' => 'required',
            ]);

            $keluarga->no_kk = $request->no_kk;
            $keluarga->alamat = $request->alamat;


            $keluarga->save();

            return redirect()->route('keluarga')->with('success', 'Data keluarga berhasil diperbarui.');
        }

        public function create()
        {
            $kecamatan = Kecamatan::all();

            return view('admin.tambahKeluarga', ['kecamatan' => $kecamatan]);
        }

        public function getKelurahan(Request $request)
        {
            $kelurahan = Kelurahan::where("id_kecamatan", $request->kecamatanID)->pluck('nama_kelurahan', 'id');

            return response()->json($kelurahan);
        }

        public function store(Request $request)
        {
            $request->validate([
                'id_kelurahan' => 'required',
                'no_kk' => 'required',
                'alamat' => 'required',
            ]);

            $tambahKeluarga = Keluarga::create([
                'id_kelurahan' => $request->id_kelurahan,
                'no_kk' => $request->no_kk,
                'alamat' => $request->alamat,
            ]);


            event(new ModelCreated($tambahKeluarga, auth()->user()));

            // dd($tambahKeluarga);
            $tambahKeluarga->save();


            if($tambahKeluarga) {
                toast('Keluarga Berhasil Dibuat','success');
                return redirect()->route('keluarga')->with('success', 'Data keluarga berhasil dibuat.');
            } else {
                toast('Keluarga Gagal Dibuat','error');
                return redirect()->route('keluarga')->with('success', 'Data keluarga gagal dibuat.');
            }
        }



}






