@extends('layouts.master')
@section('main')
<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h4>Add a table</h4>
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
      <form method="post" action="{{ route('tables.store') }}">
          @csrf


          <div class="form-group">
            <label for="table_number">Table Number:</label>
            <input type="text" class="form-control" name="table_number"/>
        </div>

        <div class="form-group">
            <label for="table_capicity">New table Capicity:</label>
            <input type="text" class="form-control" name="table_capicity"/>
        </div>




          <button type="submit" class="btn btn-primary-outline">Add New table</button>
      </form>
  </div>
</div>
</div>
@endsection
