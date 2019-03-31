@extends('layouts.app')

@section('content')
<div class="panel panel-default">
         <div class="panel-heading ">
          Dashboard
        </div>
         <div class="panel-body">
           @include('includes.errors')
            <form action="{{route('products.store')}}" method="post" type="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control" value="{{old('name')}}">
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="text" name="price" class="form-control" value="{{old('price')}}">
                </div>
                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" name="image" class="form-control" value="{{old('image')}}">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <input type="text" name="description" class="form-control" value="{{old('description')}}">
                </div>
                <div class="form-group">
                        <div class="text-center">
                            <button class="btn btn-success" type="submit">Save Product</button>
                        </div>
                </div>
            </form>
         </div>
     </div>
     
     
@endsection