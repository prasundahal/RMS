@extends('layouts.master')

@section('main')
<div>
    <a style="margin: 19px;" href="{{ route('iteams.create')}}" class="btn btn-primary">New contact</a>
    </div>
<div class="row">
<div class="col-sm-12">

  @if(session()->get('success'))
  <div class="alert alert-success">
    {{ session()->get('success') }}
  </div>
@endif
</div>
    <h1 class="display-3">Iteams</h1>
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Iteam Name</td>
          <td>Iteam Image</td>
          <td>Iteam Price</td>
          <td>Iteam Discription</td>
          <td>Iteam Time </td>
          <td>Iteam Type </td>
          <td>Iteam Discount </td>


          <td colspan = 2>Actions</td>
        </tr>
    </thead>
    <tbody>
        @foreach($iteams as $iteam)
        <tr>
            <td>{{$iteam->id}}</td>
            <td>{{$iteam->iteam_name}} </td>
            <td>{{$iteam->iteam_price}}</td>
            <td>{{$iteam->iteam_discription}}</td>
            <td>{{$iteam->iteam_type}}</td>
            <td>{{$iteam->iteam_time}}</td>
            <td>{{$iteam->iteam_discount}}</td>
            <td>
                <a href="{{ route('iteams.edit',$iteam->id)}}" class="btn btn-primary">Edit</a>
            </td>
            <td>
                <form action="{{ route('iteams.destroy', $iteam->id)}}" method="post">
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
