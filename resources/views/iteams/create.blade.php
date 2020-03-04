@extends('layouts.master')
@section('main')
<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h1 class="display-3">Add a Iteam</h1>
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
      <form method="post" action="{{ route('iteams.store') }}">
          @csrf
          <div class="form-group">
              <label for="iteam_id">Iteam ID:</label>
              <input type="text" class="form-control" name="iteam_id"/>
          </div>

          <div class="form-group">
            <label for="iteam_name">Iteam Name:</label>
            <input type="text" class="form-control" name="iteam_name"/>
        </div>

        <div class="form-group">
            <label for="iteam_price">Iteam Price:</label>
            <input type="text" class="form-control" name="iteam_price"/>
        </div>

        <div class="form-group">
            <label for="iteam_discription">Iteam Discription:</label>
            <input type="text" class="form-control" name="iteam_discription"/>
        </div>

        <div class="form-group">
            <label for="iteam_type">Iteam Type:</label>
            <input type="text" class="form-control" name="iteam_type"/>
        </div>

        <div class="form-group">
            <label for="iteam_time">Iteam Time to Prepaird:</label>
            <input type="text" class="form-control" name="iteam_time"/>
        </div>
        <div class="form-group">
            <label for="iteam_discount">Discount: </label>
            <input type="text" class="form-control" name="iteam_discount"/>
        </div>
        <div class="form-group">
            <label for="iteam_image">Image: </label>
            <input type="text" class="form-control" name="iteam_image"/>
        </div>


          <button type="submit" class="btn btn-primary-outline">Add Iteam</button>
      </form>
  </div>
</div>
</div>
@endsection
