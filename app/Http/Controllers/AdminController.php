<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\InviteMail;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function input(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'sender' => 'required',
            'masuk' => 'required',
            'hari' => 'required',
            'kegiatan' => 'required',
            'tempat' => 'required',
            'keterangan' => 'required',
        ]);
//         $tanggal_masuk = Carbon::parse($request->hari)->format('Y-m-d H:i:s');
// dd($tanggal_masuk);
        InviteMail::create([
            'sender' => $request->sender,
            'masuk' => $request->masuk,
            'hari' => $request->hari,
            'kegiatan' => $request->kegiatan,
            'tempat' => $request->tempat,
            'keterangan' => $request->keterangan,
        ]);
        return redirect()->route('admin');
    }
}
