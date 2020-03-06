@extends('layouts.master')
@section('main')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Place order</h1>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        <br />
        @endif
        <form method="post" action="{{ route('tableorders.update', $table->id) }}"enctype="multipart/form-data">

            @method('PATCH')
            @csrf
            <div class="form-group">

                <label for="table_number">Table Number:</label>
                <input type="text" class="form-control" name="table_number" value={{ $table->table_number }} />
            </div>

            <div class="form-group">

                <label for="table_name">Table Capicity:</label>
                <input type="text" class="form-control" name="table_capicity" value={{ $table->table_capicity }} />
            </div>


            <select class="form-control" name="product_id">



                <option>Select Catogary</option>



                @foreach ($iteams as $key => $value)

                  <option value="{{ $key }}" {{ ( $key == $selectedID) ? 'selected' : '' }}>

                      {{ $value }}

                  </option>

                @endforeach

              </select>



        </br></br>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection
