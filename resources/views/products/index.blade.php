@extends('layouts.app')
@section('content')
<div class="panel panel-default">
         <div class="panel-heading ">
          Products E-Commerce
        </div>
         <div class="panel-body">
            <table class="table table-hover">
                 <head>
                     <th>
                         Name
                     </th>
                    
                     <th>
                         Image
                     </th>
                      <th>
                         Price
                     </th>
                     <th>
                         Edit
                     </th>
                     <th>
                         Delete
                     </th>
                 </head>
                 <tbody>
                  @if($products->count()>0)
                     @foreach($products as $product)
                     <tr>
                        <td>
                             {{$product->name}}
                         </td>
                         <td>
                             <img src="{{$product->image}}" alt="{{$product->name}}" width="90px" height="50px">
                         </td>
                        <td>
                            {{$product->price}}
                        </td>
                         <td>
                             <a href="{{route('products.edit',['id'=>$product->id])}}" class="btn btn-success btn-xs">
                                Edit
                             </a>
                         </td>
                         <td>
                          <form action="{{route('products.destroy',['id'=>$product->id])}}" method="post">
                              {{csrf_field()}}
                              {{method_field('DELETE')}}
                              <button class="btn btn-danger btn-xs"> Delete</button>
                          </form>
                         
                         </td>
                     </tr>
                     @endforeach
                      @else
                        <tr>
                            <th colspan="5" class="text-center">No Products To Display</th>
                        </tr>
                    @endif
                 </tbody>
             </table>
         </div>
     </div>
     
     
@endsection