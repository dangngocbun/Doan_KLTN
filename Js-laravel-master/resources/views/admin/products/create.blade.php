@extends('admin.layout')
@section('content')
<div class="col-md-6 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Basic form</h4>
            <p class="card-description"> Basic form elements </p>
            <form class="forms-sample" action="{{ route('admin.products.store') }}" method="post">
                {{ csrf_field() }}
               

                <div class="form-group">
                    <label for="exampleInputName1">Name</label>
                    <input type="text" name="name" value="" class="form-control" id="exampleInputName1" placeholder="Name">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail3">img</label>
                    <input type="text" name="img" value=""  class="form-control" id="exampleInputEmail3" placeholder="Image">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword4">desc</label>
                    <input type="text" name="desc" value=""  class="form-control" id="exampleInputPassword4" placeholder="desc">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword4">price</label>
                    <input type="" name="price" value=""  class="form-control" id="exampleInputPassword4" placeholder="price">
                </div>
                
                <div class="form-group">
                    <label for="exampleInputPassword4">category</label>
                   <select name="category_id" class="form-control" id="">
                   @foreach($cates as $item)
    <option value="{{$item->id}}" selected>{{$item->name}}</option>
   
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