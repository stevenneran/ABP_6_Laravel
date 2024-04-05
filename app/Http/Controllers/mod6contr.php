<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mod6contr extends Controller
{
    public function index()
    {
        $daftarproduk = products::all();
        return view("mod6", compact("products"));
    }
}
