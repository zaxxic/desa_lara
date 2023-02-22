<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\about;

class AboutController extends Controller
{
    public function about(){
        return view('website/about');
    }
}
