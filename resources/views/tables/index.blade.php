@extends('layouts.master')
@section('main')
<div>
    <a style="margin:10px;" href="{{ route('tables.create')}}" class="btn btn-success">New Table</a>
</div>

@if(session()->get('success'))
      <div class="alert alert-success">
        {{ session()->get('success') }}
      </div>
@endif

<div class="container custom-form">
<h1 class="pull-left">Tables@Ketali</h1>
    <table class="table table-bordered">
      <thead>
          <tr>
            <td>ID</td>
            <td>Table Nmuber</td>
            <td>Table capicity</td>
            <td colspan = 2>Actions</td>
          </tr>
      </thead>
      <tbody>
          @foreach($tables as $table)
          <tr>
              <td>{{$table->id}}</td>
              <td>{{$table->table_number}} </td>
              <td>{{$table->table_capicity}}</td>

                <td>
                    <a href="{{ route('tableorders.edit',$table->id)}}" class="btn btn-primary">Orders</a>
                </td>
                <td>
                  <form action="{{ route('tables.destroy', $table->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">Delete</button>
                  </form>
              </td>
          </tr>
          @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection
