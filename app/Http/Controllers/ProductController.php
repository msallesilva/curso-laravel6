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

    public function create(){
        return "Exibindo a criação do produto";
    } 

    public function edit($id)
    {
        return "Form para edição do produto : " .$id;
    }

    public function store()
    {
        return "Cadastro de um novo produto";
    }

    public function update($id)
    {
        return "Editando o produto : " .$id;
    }

    public function destroy($id)
    {
        return "Deletando o produto : " .$id;
    }
}
