@extends('layouts.master')

@section('main')
<div>
  <a 
    style="margin: 10px;" 
    href="{{ route('iteams.create')}}" 
    class="btn btn-primary"
  >
    Add Item
  </a>
</div>
<div class="container custom-form">
  <div class="row">
  <div class="col-sm-12">
    @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}
    </div>
  @endif
  </div>
    <h1 class="display-3">Items</h1>
    <table class="table table-striped">
      <thead>
          <tr>
            <td>ID</td>
            <td>Item Name</td>
            <td>Item Price</td>
            <td>Item Description</td>
            <td>Item Time </td>

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
              <td>{{$iteam->iteam_time}}</td>
              <td>
                <div class="row">
                  <div class="col-sm-3">
                    <a href="{{ route('iteams.edit',$iteam->id)}}" class="btn btn-success">Edit</a>
                  </div>
                  <div class="col-sm-3">
                    <form action="{{ route('iteams.destroy', $iteam->id)}}" method="post">
                      @csrf
                      @method('DELETE')
                      <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                  </div>
              </td>
          </tr>
          @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection
