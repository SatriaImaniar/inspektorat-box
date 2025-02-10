<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InviteMail;

class InviteMailController extends Controller
{
    // Menampilkan jadwal undangan (untuk user)
    public function index()
    {
        $invites = InviteMail::all();
        return view('user.schedule', compact('invites'));
    }

    // Menampilkan form input surat undangan (untuk admin)
    public function create()
    {
        return view('admin.invite_form');
    }

    // Menyimpan data surat undangan ke database
    public function store(Request $request)
    {
        $request->validate([
            'sender' => 'required',
            'came' => 'required|date',
            'day' => 'required',
            'activity' => 'required',
            'place' => 'required',
            'description' => 'nullable'
        ]);

        InviteMail::create($request->all());

        return redirect()->route('schedule')->with('success', 'Surat undangan berhasil ditambahkan!');
    }
}
