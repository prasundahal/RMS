@extends('layouts.master')
@section('main')
<div class="container">
<h1>Add an Item</h1>
<div class="pull-right">
            <a class="btn btn-primary" href="{{ route('iteams.index') }}"> Back</a>
      </div>
  <div class="row">
  <div class="col-sm-8 offset-sm-2">
  <div>
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div>
    @endif
      <form method="post" action="{{ route('iteams.store') }}">
          @csrf
        <div class="form-group">
            <label for="iteam_name">Item Name:</label>
            <input type="text" class="form-control" name="iteam_name"/>
        </div>

        <div class="form-group">
            <label for="iteam_price">Item Price:</label>
            <input type="text" class="form-control" name="iteam_price"/>
        </div>

        <div class="form-group">
            <label for="iteam_discription">Item Description:</label>
            <input type="text" class="form-control" name="iteam_discription"/>
        </div>

        <div class="form-group">
            <label for="iteam_type">Item Type:</label>
            <input type="text" class="form-control" name="iteam_type"/>
        </div>

        <div class="form-group">
            <label for="iteam_time">Time to Prepare Item:</label>
            <input type="text" class="form-control" name="iteam_time"/>
        </div>
        <div class="form-group">
            <label for="iteam_time">Image:</label>
            <input type="file" class="form-control" name="image"/>
        </div>
        <button type="submit" class="btn btn-primary">Add Item</button>
      </form>
  </div>
</div>
</div>
</div>
@endsection
