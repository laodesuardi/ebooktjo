<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Mail\Email;
use Illuminate\Support\Facades\Mail;






class RegisterController extends Controller
{
    public function index() {
        return view('register.index', [
            'tittle' => 'register',
            'active' => 'register'
        ]);
    }

    public function store(Request $request) {
        $validatedData = $request->validate([
            'name' => 'required|max:255|',
            'phone' => 'required|numeric|min_digits:10',
            'email' => 'required|email:dns'
        ]);

        User::create($validatedData);

        $user = User::latest()->orderBy('email')->first();
        Mail::to($user)->send(new Email());

        Mail::to('painahsubang2019@gmail.com')->send(new Email());
        
        return redirect('/thanks')->with('success', 'Terima kasih sudah memasukan data, tunggu beberapa saat, link download akan dikirim ke nomor whatsapp anda...');
    }
}
