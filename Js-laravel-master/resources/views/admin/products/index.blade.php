@extends('admin.layout')
@section('content')
@if(Session::has('message'))
<h3>{{ Session::get('message') }}</h3>
@endif
<div class="row">
    <a class="" href="{{ route('admin.products.create') }}"> Create New</a>
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Basic Table</h4>
                <p class="card-description"> Add class <code>.table</code> </p>
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Img</th>
                          
                            <th>Price</th>
                            <TH>Category</TH>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                   
                        @foreach($productList as $product)
                        <tr>
                            <td>#</td>
                            <td>{{ $product->name }}</td>
                            <td><img src="{{asset('images')}}/{{ $product->img }}" alt=""></td>
                        
                            <td> {{number_format( $product->price )}}</td>
                            <td>{{ $product->category_id }}</td>
                            <td>
                                <a class="badge badge-danger" href="{{ route('admin.products.edit',$product->id) }}">Edit</a>
                            </td>

                            <td>
                                <form action="{{ route('admin.products.destroy',$product->id) }}" method="post">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <button class="btn btn-danger" onclick="return confirm('bạn muốn xóa mục này');" type="submit">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection