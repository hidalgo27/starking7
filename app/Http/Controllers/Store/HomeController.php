<?php

namespace App\Http\Controllers\Store;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct(){
        $this->middleware('can:Leer Producto')->only('index', 'listarPordcutos');
    }

    public function index(){
        return view('store.index');
    }

    public function listarPordcutos(){
        return view('store.listarProductos');
    }

}
