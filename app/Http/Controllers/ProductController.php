<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

use App\Http\Requests;

class ProductController extends Controller
{
    function create(){

        return view('products.create');
    }

    function index(){

    $products=Product::all();

        return view('products.index',compact('products'));
    }
    function show(){

        return view('products.products');
    }

    function delete(){

        return view('products.products');
    }
}
