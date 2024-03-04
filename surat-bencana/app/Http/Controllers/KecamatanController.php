<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kecamatan;

class KecamatanController extends Controller
{
    public function index()
    {
        $kecamatans = Kecamatan::get();

        return view('admin.kecamatan', ['kecamatans' => $kecamatans]);
    }


    public function edit($id)
    {
        $kecamatan = Kecamatan::findOrFail($id);
        return view('admin.kecamatan', compact('kecamatan'));
    }

    public function update(Request $request, $id)
        {
            $kecamatan = Kecamatan::findOrFail($id);

            $request->validate([
                'nama_kecamatan' => 'required',
                'nip_camat' => 'required',
                'nama_camat' => 'required'
            ]);

            $kecamatan->nama_kecamatan = $request->nama_kecamatan;
            $kecamatan->nip_camat = $request->nip_camat;
            $kecamatan->nama_camat = $request->nama_camat;

            $kecamatan->save();


        if($kecamatan) {
            toast('Kecamatan Berhasil Diupdate','success');
            return redirect()->route('kecamatan')->with('success', 'Data kecamatan berhasil diupdate.');
        } else {
            toast('Kecamatan Gagal Diupdate','error');
            return redirect()->route('kecamatan')->with('success', 'Data kecamatan gagal diupdate.');
        }

        }




}
