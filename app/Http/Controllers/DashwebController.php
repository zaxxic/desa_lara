<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\dashweb;

class DashwebController extends Controller
{
    public function dashweb(){
        return view('website/dashweb');
    }
}
