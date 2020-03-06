
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Laravel 5.8 Crud Tutorial</title>
<meta content='width=device-width, initial-scale=1, maximum-scale=1' name='viewport'/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
<table class="table table-bordered table-striped">
 <tr>
  <th width="10%">Image</th>
  <th width="35%">Order Name</th>

  <th width="30%">Action</th>
 </tr>
 @foreach($data as $row)
  <tr>
   <td><img src="{{ URL::to('/') }}/images/{{ $row->image }}" class="img-thumbnail" width="75" /></td>
   <td>{{ $row->order_name }}</td>

   <td>



   </td>
  </tr>
 @endforeach
</table>
{!! $data->links() !!}

