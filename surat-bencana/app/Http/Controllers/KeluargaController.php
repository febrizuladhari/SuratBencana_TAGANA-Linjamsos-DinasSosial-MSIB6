<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Keluarga;
use App\Models\Identitas;

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
    }
    