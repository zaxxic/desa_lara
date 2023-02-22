<?php

namespace App\Http\Controllers;

use App\Models\register;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function tampil()
    {
        return view('reg.registrasi');
    }

    public function store(Request $request)
{
    $request->validate([
        'username' => 'required|min:4',
        'email'=>'required|email:dns|unique:registers',
        'password' => 'required|min:4',
        'kode_pos' => 'required|min:5|max:5',
        'koordinat' => 'required',
        'gambar' => 'required'
        // Aturan validasi lainnya
    ], [
        'username.required' => 'Username sudah digunakan',
        'email.unique' => 'email sudah digunakan',
        'password.required' => 'Isi password sudah digunakan',
        'kode_pos.required' => 'Isi kode pos',
        'kode_pos.koordinat' => 'Isi kode koordinat',
        'kode_pos.gambar' => 'Isi kode gambar',
        // Pesan error lainnya
    ]);
    return redirect('/login'); 
    // Proses data
}

//     public function storee(Request $request)
// {

//    $validateData = $request->validate([

//         'username'=>'required|max:200|min:4',
//         'email'=>'required|email:dns:min3',
//         'password'=>'required|min:4|max:200',
//         'kodepos'=>'required|min:4|max:200',
//         'password'=>'required|min:4|max:200',
//         'gambar'=>'required'
//     ]);

//     $kredensial=$validateData['password'] = bcrypt($validateData['password']);

// //  return $request->all(); 
// register::create($validateData);

// return redirect('/login'); 
// }
}
