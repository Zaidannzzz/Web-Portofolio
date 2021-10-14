<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PindahController extends Controller
{
    public function products()
    {
        return view('products');
    }
    public function kontak()
    {
        return view('contact');
    }
}
