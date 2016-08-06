@extends('layouts.master')
@section('title') Total Product List @endsection


@section('section')

    <div class="row">

        <div class="col-md-3">


        </div>

        <div class="col-md-8 offset1">

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Latest Product</h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        @foreach($products as $product)
                        <div class="col-md-6">
                            <img src="assets/image/{{$product->image}}">
                            <h4>{{$product->title}}</h4>
                            <p>{{$product->description}}</p>
                            <h5>{{$product->price}}</h5>

                            
                        </div>
                        
                            @endforeach
                    </div>
                    

                </div>
            </div>


        </div>


    </div>


    @endsection