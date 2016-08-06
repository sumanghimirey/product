@extends('layouts.master')
@section('title') Products List @endsection



@section('section')
    <div class="col-lg-offset-9">

        @if(Auth::check())
            <a href="#" class="btn btn-block" > {{ Auth::user()->name }}</a>
            <a href="{{route('logout')}}" class="btn btn-danger "> Log Out</a>


    </div>

    @endif

    <a href="#" class="btn btn-success"> Add Products</a>


@endsection