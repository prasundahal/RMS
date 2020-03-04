@extends('layouts.master')

@section('main')
<div>
    <a style="margin: 19px;" href="{{ route('orders.create')}}" class="btn btn-primary">New Orders</a>
    </div>
<div class="row">
<div class="col-sm-12">

  @if(session()->get('success'))
  <div class="alert alert-success">
    {{ session()->get('success') }}
  </div>
@endif
</div>
    <h1 class="display-3">Orders</h1>
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>order Name</td>
          <td>order Image</td>
          <td>order Price</td>
          <td>order Discription</td>
          <td>order Time </td>
          <td>order Type </td>
          <td>order Discount </td>


          <td colspan = 2>Actions</td>
        </tr>
    </thead>
    <tbody>
        @foreach($orders as $order)
        <tr>
            <td>{{$order->id}}</td>
            <td>{{$order->order_name}} </td>
            <td>{{$order->order_price}}</td>
            <td>{{$order->order_discription}}</td>
            <td>{{$order->order_type}}</td>
            <td>{{$order->order_time}}</td>
            <td>{{$order->order_discount}}</td>
            <td>
                <a href="{{ route('orders.edit',$order->id)}}" class="btn btn-primary">Edit</a>
            </td>
            <td>
                <form action="{{ route('orders.destroy', $order->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
</div>
@endsection
