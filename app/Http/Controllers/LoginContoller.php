<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginContoller extends Controller

{
    public function store(Request $request)
    {
        $request->validate([
            'email'=>'required|email:dns|unique:registers',
            'password' => 'required|min:4',
            // Aturan validasi lainnya
        ], [
            'email.unique' => 'email salah',
            'password.required' => 'Isi password salah'
            // Pesan error lainnya
        ]);
        return redirect('/login'); 
        // Proses data
    }


    public function tampil()
{
    return view('reg.login');
}







}
