@extends('layouts.master')

@section('main')

@if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}
    </div>
@endif
<div class="container custom-form">
  <div class="row">
  <div class="col-sm-12">
  </div>
    <h1 class="pull-left"></h1>
    <table class="table table-bordered">
      <thead>
          <tr>

            <td>Item Names</td>
            <td>Table Numbers</td>
            <td colspan = 2>Actions</td>
          </tr>
      </thead>
      <tbody>
          @foreach($iteams as $iteam)
          <tr>

              <td>{{$iteam->iteam_name}} </td>
              <td>{{$iteam->table_number}}</td>
<td>
                <div class="row">
                  <div class="col-sm-3">
                    <a href="{{ route('kitchens.edit',$iteam->id)}}" class="btn btn-success"> Completed</a>
                  </div>

              </td>
          </tr>
          @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection
