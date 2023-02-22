<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginContoller extends Controller

{
    public function tampil()
    {
        return view('reg.login');
    }

    public function store(Request $request)
    {
        $request->validate([
            'email'=>'required|email:dns|unique:registers',
            'password' => 'required|min:4',
            // Aturan validasi lainnya
        ], [
            'email.unique' => 'email yang anda isikan salah',
            'password.required' => 'password yang anda masukkan salah'
            // Pesan error lainnya
        ]);
        return redirect('/login'); 
        // Proses data
    }


    public function storee(Request $request)
{

   $validateData = $request->validate([


        'email'=>'required|email:dns:min3',
        'password'=>'required|min:4|max:200',

    ]);

    $kredensial=$validateData['password'] = bcrypt($validateData['password']);

//  return $request->all(); 
login::create($validateData);

return redirect('/register'); 
}
}

