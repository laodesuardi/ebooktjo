<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Notifications\Informasi;
use App\Mail\Email;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function kirimi()
    {
        Mail::to('laodesuardi.fifa@gmail.com')->send(new Email());
        // return new Email();
    }

    public function kirim()
    {
        $user = User::latest()->orderBy('email')->first();
        Mail::to($user)->send(new Email());
        // return new Email();
    }



    public function notif()
    {
        $user = User::latest()->first();
        $data = [
            'line1' => 'Pesanan Anda telah disetujui',
            'action' => 'Klik OK',
            'line2' => 'Batas transfer tanggal 30 September 2022'
        ];
        $user->notify(new Informasi($data));
    }
}
