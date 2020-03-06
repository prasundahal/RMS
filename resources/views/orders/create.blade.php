@extends('layouts.master')
@section('main')
<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h1 class="display-3">Add Food</h1>
    <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('orders.index') }}"> Back</a>
      </div>
  <div>
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('orders.store') }}">
          @csrf


          <div class="form-group">
            <label for="order_name">Order Name:</label>
            <input type="text" class="form-control" name="order_name"/>
        </div>

        <div class="form-group">
            <label for="order_price">Order Price:</label>
            <input type="text" class="form-control" name="order_price"/>
        </div>

        <div class="form-group">
            <label for="order_discription">order Discription:</label>
            <input type="text" class="form-control" name="order_discription"/>
        </div>

        <div class="form-group">
            <label for="order_type">order Type:</label>
            <input type="text" class="form-control" name="order_type"/>
        </div>

        <div class="form-group">
            <label for="order_time">order Time to Prepaird:</label>
            <input type="text" class="form-control" name="order_time"/>
        </div>
        <div class="form-group">
            <label for="order_discount">Discount: </label>
            <input type="text" class="form-control" name="order_discount"/>
        </div>
        <div class="form-group">
            <label for="order_image">Image: </label>
            <input type="text" class="form-control" name="order_image"/>
        </div>


          <button type="submit" class="btn btn-primary-outline">Add order</button>
      </form>
  </div>
</div>
</div>
@endsection
