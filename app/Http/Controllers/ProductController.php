<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

use App\Http\Requests;

class ProductController extends Controller
{
    function create(){

        $category=Category::all();
        return view('products.create',compact('category'));
    }

    function index(){

    $products=Product::all();

        return view('products.index',compact('products'));
    }
    function show($id){

        $products=Product::find($id);
        return view('products.products',compact('products'));
    }
    function store(Request $request){

        $image=$request->file('image');
        $image->move(public_path('assets/image'),time().".".$image->getClientOriginalExtension());
        Product::create($request->all());

        return redirect('/');
    }



    function edit(){

        return view('products.products');
    }
    
    
    function delete(){

        return view('products.products');
    }
}
