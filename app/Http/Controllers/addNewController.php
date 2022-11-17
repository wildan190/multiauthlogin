<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class addNewController extends Controller
{
    // Route Ke Halaman
    public function index()
    {
        return view('addnew.index');
    }
}
