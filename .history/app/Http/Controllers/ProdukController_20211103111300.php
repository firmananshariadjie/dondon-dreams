<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index()
    {
        $all = Produk::all();

        return view('/admin/produk');
    }
}
