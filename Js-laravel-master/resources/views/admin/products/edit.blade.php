@extends('admin.layout')
@section('content')
<div class="col-md-6 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Basic form</h4>
            <p class="card-description"> Basic form elements </p>
            <form class="forms-sample" action="{{ route('admin.products.update', $product->id) }}" method="post">
                {{ csrf_field() }}
                {{ method_field('PUT') }}

                <div class="form-group">
                    <label for="exampleInputName1">Name</label>
                    <input type="" name="name" value="{{ $product->name }}" class="form-control" id="exampleInputName1" placeholder="Name">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail3">img</label>
                    <input type="text" name="img" value="{{ $product->img }}"  class="form-control" id="exampleInputEmail3" placeholder="Image">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword4">desc</label>
                    <input type="text" name="desc" value="{{ $product->desc }}"  class="form-control" id="exampleInputPassword4" placeholder="Desc">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword4">Price</label>
                    <input type="text" name="price" value="{{ $product->price }}"  class="form-control" id="exampleInputPassword4" placeholder="price">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword4">category</label>
                   <select name="category_id" class="form-control" id="">
                   @foreach($cates as $item)
    @if($item->id == $product->category_id)
    <option value="{{$item->id}}" selected>{{$item->name}}</option>
    @else
    <option value="{{$item->id}}" >{{$item->name}}</option>
@endif
    @endforeach
                   </select>
                </div>
              
               
                <button type="submit" class="btn btn-success mr-2">Submit</button>
                <button class="btn btn-light">Cancel</button>
            </form>
        </div>
    </div>
</div>
@endsection