@extend('layouts.aster1')
@section('content1')
<div>
    <a style="margin: 100px;" href="{{ route('tables.create')}}" class="btn btn-primary">Orders</a>
    </div>
<div class="row">
<div class="col-sm-12">

  @if(session()->get('success'))
  <div class="alert alert-success">
    {{ session()->get('success') }}
  </div>
@endif
</div>
    <h1 class="display-3">Your's Tables</h1>
  <table class="table table-striped">
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
                <a href="{{ route('tables.edit',$table->id)}}" class="btn btn-primary">Place</a>
            </td>

        </tr>
        @endforeach
    </tbody>
  </table>
<div>
</div>
@endsection
