<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Identitas;

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
                'usia' => 'required',
                'jns_kelamin' => 'required'
            ]);

            $identitas->nama = $request->nama;
            $identitas->nik = $request->nik;
            $identitas->status = $request->status;
            $identitas->usia = $request->usia;
            $identitas->jns_kelamin = $request->jns_kelamin;

            $identitas->save();

            return redirect()->route('identitas')->with('success', 'Data identitas berhasil diperbarui.');
        }




}
