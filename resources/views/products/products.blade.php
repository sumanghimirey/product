@extends('layouts.master')

@section('title') Show Product @endsection

@section('section')

    <div class="panel panel-default">
        <div class="panel-heading">
            <h2 class="panel-title">{{$products->title}}</h2>
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-4">
                    <img src="assets/image/{{$products->image}}"/>
                  </div>
                    <div class="col-md-8">
                        <p> {{$products->description}}</p>

                        <h3> Item Detail</h3>
                        <ul class="list-group">
                            <li class="list-group-item">
                                {{$products->price}}
                            </li>

                        </ul>


                    </div>
            </div>


        </div>
    </div>



    @endsection