@extends('base')
@section('main')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Update a Iteam</h1>

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

                <label for="iteam_name">Image:</label>
                <input type="text" class="form-control" name="iteam_image" value={{ $iteam->iteam_image }} />
            </div>
            <div class="form-group">

                <label for="iteam_name">Price:</label>
                <input type="text" class="form-control" name="iteam_price" value={{ $iteam->iteam_price }} />
            </div>
            <div class="form-group">

                <label for="iteam_name">Price:</label>
                <input type="text" class="form-control" name="iteam_price" value={{ $iteam->iteam_price }} />
            </div>
            <div class="form-group">

                <label for="iteam_name">Price:</label>
                <input type="text" class="form-control" name="iteam_price" value={{ $iteam->iteam_price }} />
            </div>

            <div class="form-group">

                <label for="iteam_name">Price:</label>
                <input type="text" class="form-control" name="iteam_price" value={{ $iteam->iteam_price }} />
            </div>







            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection
'iteam_id'=>'required',
        'iteam_name'=>'required',
        'iteam_image'=>'required',
        'iteam_price'=>'required',
        'iteam_time'=>'required',
        'iteam_discount'=>'required'
