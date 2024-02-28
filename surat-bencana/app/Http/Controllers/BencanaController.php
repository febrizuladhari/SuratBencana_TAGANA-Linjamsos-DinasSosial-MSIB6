<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bencana;
use App\Models\Keluarga;

class BencanaController extends Controller
{
    public function index()
    {
        $bencanas = Bencana::with('keluarga')->get();

        return view('admin.bencana', ['bencanas' => $bencanas]);
    }


    public function edit($id)
    {
        $bencana = Bencana::findOrFail($id);
        return view('admin.bencana', compact('bencana'));
    }

    public function update(Request $request, $id)
        {
            $bencana = Bencana::findOrFail($id);

            $request->validate([
                'jns_bencana' => 'required|string|max:255',
                'tanggal_bencana' => 'required',
            ]);

            $bencana->jns_bencana = $request->jns_bencana;
            $bencana->tanggal_bencana = $request->tanggal_bencana;

            $bencana->save();

            return redirect()->route('bencana')->with('success', 'Data bencana berhasil diperbarui.');
        }




}
