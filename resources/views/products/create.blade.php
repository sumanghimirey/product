@extends('layouts.master')
@section('title') Products List @endsection



@section('section')
    <div class="col-lg-offset-9">

        @if(Auth::check())
            <a href="#" class="btn btn-block" > {{ Auth::user()->name }}</a>
            <a href="{{route('logout')}}" class="btn btn-danger "> Log Out</a>


    </div>

    @endif
    <hr>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h2 class="panel-title"> Create Product</h2>
        </div>
        <div class="panel-body">
            <form action="{{route('saveProduct')}}" method="post" enctype="multipart/form-data">

                {{csrf_field()}}

                <div class="form-group">
                    <labe> Select Category</labe>
                    <select>
                        @foreach($category as $ctr)
                        <option value="{{$ctr->id}}">
                            {{$ctr->name}}
                        </option>
                            @endforeach
                    </select>

                </div>
                <div class="form-group">
                    <label >Title</label>
                    <input type="text" class="form-control" name="title"  placeholder="Enter title">
                </div>
                <div class="form-group">
                    <label for="Description">Description</label>
                    <textarea class="form-control" id="Despcription" rows="3" name="despcription"></textarea>
                </div>

                <div class="form-group">
                <label >Price</label>
                <input type="text" class="form-control" placeholder="Enter title" name="price">
        </div>
                <div class="form-group">
                    <label for="exampleInputFile">Image</label>
                    <input type="file" class="form-control-file" name="image" id="exampleInputFile" aria-describedby="fileHelp">
                    <small id="fileHelp" class="form-text text-muted">Please Upload Product Image</small>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>


        </div>
    </div>



@endsection