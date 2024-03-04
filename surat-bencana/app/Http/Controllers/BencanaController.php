<?php

namespace App\Http\Controllers;

use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;
use App\Models\Kecamatan;
use App\Models\Kelurahan;
use App\Models\Bantuan;
use App\Models\DetailBantuan;
use App\Models\Bencana;
use App\Models\Keluarga;
use App\Models\Identitas;

class BencanaController extends Controller
{

    public function index()
    {
        $bencanas = Bencana::with('keluarga')->get();
        return view('admin.bencana', compact('bencanas'));
    }


    public function edit($id)
    {
        $bencana = Bencana::findOrFail($id);
        $bencanas = Bencana::all();
        return view('admin.bencana', compact('bencana', 'bencanas'));
    }

    public function update(Request $request, $id)
        {
            $bencana = Bencana::findOrFail($id);

            $request->validate([
                'jns_bencana' => 'required|string|max:255',
                'tanggal_bencana' => 'required|date',
            ]);

            $bencana->jns_bencana = $request->jns_bencana;
            $bencana->tanggal_bencana = $request->tanggal_bencana;

            $bencana->save();
            // dd($bencana);

            if($bencana) {
                toast('Bencana Berhasil Diupdate','success');
                return redirect()->route('bencana')->with('success', 'Data bencana berhasil diperbarui.');
            } else {
                toast('Bencana Gagal Diupdate','error');
                return redirect()->route('bencana')->with('success', 'Data bencana gagal diperbarui.');
            }
        }


        public function destroy($id)
        {
            $bencana = Bencana::findOrFail($id);
            $bencana->delete();

            if($bencana) {
                toast('Bencana Berhasil Dihapus','success');
                return redirect()->route('bencana')->with('success', 'Data bencana berhasil dihapus.');
            } else {
                toast('Bencana Gagal Dihapus','error');
                return redirect()->route('bencana')->with('success', 'Data bencana gagal dihapus.');
            }
        }


        public function create()
        {
            // $keluargas = Bencana::with('keluarga')
            //         ->distinct()
            //         ->get()
            //         ->pluck('keluarga')
            //         ->unique('id');

            $kecamatan = Kecamatan::all();
            return view('admin.tambahBencana', compact('kecamatan'));

            // return view('admin.tambahBencana', compact('keluargas'));
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

        public function store(Request $request)
        {

            $request->validate([
                'id_keluarga' => 'required',
                'jns_bencana' => 'required',
                'tanggal_bencana' => 'required|date',
            ]);

            $bencana = Bencana::create([
                'id_keluarga' => $request->id_keluarga,
                'jns_bencana' => $request->jns_bencana,
                'tanggal_bencana' => $request->tanggal_bencana,
            ]);

            $bencana->save();
            // dd($bencana);

            if($bencana) {
                toast('Bencana Berhasil Dibuat','success');
                return redirect()->route('bencana')->with('success', 'Data bencana berhasil dibuat.');
            } else {
                toast('Bencana Gagal Dibuat','error');
                return redirect()->route('bencana')->with('success', 'Data bencana gagal dibuat.');
            }
        }

}
