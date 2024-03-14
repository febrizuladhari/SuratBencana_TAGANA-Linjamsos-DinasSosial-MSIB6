<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;
use App\Models\Kecamatan;
use App\Models\Kelurahan;
use App\Models\Bantuan;
use App\Models\DetailBantuan;
use App\Models\Bencana;
use App\Models\Keluarga;
use App\Models\Identitas;
use App\Models\User;
use App\Models\UserLog;
use App\Models\LogCreate;
use App\Models\LogUpdate;
use App\Models\LogDelete;

use App\Events\ModelCreated;
use App\Events\ModelDeleted;
use App\Events\ModelUpdated;

class LogController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function logLoginLogout()
    {
        $logLoginLogouts = UserLog::all();

        return view('log.logLoginLogout', compact('logLoginLogouts'));
    }

    public function logCreate()
    {
        $logCreates = LogCreate::all();

        return view('log.logCreate', compact('logCreates'));
    }

    public function logUpdate()
    {
        $logUpdates = LogUpdate::all();

        return view('log.logUpdate', compact('logUpdates'));
    }

    public function logDelete()
    {
        $logDeletes = LogDelete::all();

        return view('log.logDelete', compact('logDeletes'));
    }



    public function index()
    {
        //
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
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
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
