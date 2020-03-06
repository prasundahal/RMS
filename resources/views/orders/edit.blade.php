@extends('base')
@section('main')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Update a Iteam</h1>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('orders.index') }}"> Back</a>
      </div>
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
        <form method="post" action="{{ route('iteams.update', $iteam->id) }}">
            @method('PATCH')
            @csrf
            <div class="form-group">

                <label for="iteam_name">Iteam Name:</label>
                <input type="text" class="form-control" name="iteam_name" value={{ $iteam->Iteam_name }} />
            </div>

            <div class="form-group">

                <label for="iteam_name">Iteam Name:</label>
                <input type="text" class="form-control" name="iteam_name" value={{ $iteam->Iteam_name }} />
            </div>
            <div class="form-group">

                <label for="iteam_name">Iteam Name:</label>
                <input type="text" class="form-control" name="iteam_name" value={{ $iteam->Iteam_name }} />
            </div>










            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection
