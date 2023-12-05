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
                            <th>Code</th>
                            <th>Description</th>
                          
                            <th>User</th>
                            <TH>Status</TH>
                         
                        </tr>
                    </thead>
                   
                        @foreach($orderList as $order)
                        <tr>
                            <td>#</td>
                            <td>{{ $order->code }}</td>
                            <td>{{ $order->desc }}</td>
                            <td>{{ $order->user->name }}</td>
                            <td>{{ $order->status }}</td>
                           

                           
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection