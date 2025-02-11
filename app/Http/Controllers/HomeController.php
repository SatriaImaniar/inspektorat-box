<?php

namespace App\Http\Controllers;

use App\Models\InviteMail;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $events = InviteMail::select('hari')->get();

        // Ubah format agar sesuai dengan FullCalendar
        $formattedEvents = $events->map(function ($event) {
            return [
                'title' => 'Undangan',
                'start' => $event->hari, // Format: YYYY-MM-DD
                'color' => 'red', // Warna merah untuk tanggal yang ditandai
            ];
        });

        // Kirim data ke view
        return view('home', ['events' => $formattedEvents]);
    }
    public function admin(){
        return view('admin');
    }
}
