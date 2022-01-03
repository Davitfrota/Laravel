<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductIDController extends Controller
{
    function index ($id = null) {
        return view('product', ['id' => $id ]);
    }
}
