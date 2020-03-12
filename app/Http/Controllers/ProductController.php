<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $products = ['produto01','produto02','produto03'];
        return $products;
    }

    public function show($id)
    {
        return "Exibindo o produto :" .$id;
    }
}
