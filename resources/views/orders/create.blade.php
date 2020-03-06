
@if($errors->any())
<div class="alert alert-danger">
 <ul>
  @foreach($errors->all() as $error)
  <li>{{ $error }}</li>
  @endforeach
 </ul>
</div>
@endif
<div align="right">
 <a href="{{ route('order.index') }}" class="btn btn-default">Back</a>
</div>

<form method="post" action="{{ route('order.store') }}" enctype="multipart/form-data">

 @csrf
 <div class="form-group">
  <label class="col-md-4 text-right">Enter Order Name</label>
  <div class="col-md-8">
   <input type="text" name="order_name" class="form-control input-lg" />
  </div>
 </div>
 <br />

 <div class="form-group">
  <label class="col-md-4 text-right">Select Image</label>
  <div class="col-md-8">
   <input type="file" name="image" />
  </div>
 </div>
 <br /><br /><br />
 <div class="form-group text-center">
  <input type="submit" name="add" class="btn btn-primary input-lg" value="Add" />
 </div>

</form>
