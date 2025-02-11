<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InviteMailController extends Controller
{
    public function index() {
        return view('schedule'); // Sesuaikan dengan tampilan yang ada
    }

    public function create() {
        return view('admin.invite'); // Sesuaikan dengan tampilan admin
    }

    public function store(Request $request) {
        // Logika penyimpanan surat undangan
    }
}
