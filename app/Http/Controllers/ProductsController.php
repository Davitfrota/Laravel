<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function search(){

        $busca = request('search');

        return view('products', ['busca' => $busca]);
    }
}
