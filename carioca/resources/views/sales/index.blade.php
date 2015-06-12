








@extends('layout')
@section('content')



	




	
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Sales</h2>
             
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>No</th>
        <th>Registration date</th>
        <th>Updated date</th>
        <th>Options</th>
      </tr>
    </thead>
    <tbody>
	@foreach ($sales as $sale)
    
      <tr>
        <td><a href="/sales/{{$sale->id}}">{{$sale->id}}</a></td>
        <td>{{$sale->created_at}}</td>
        <td>{{$sale->updated_at}}</td>
        <td>{!! Form::open(array('route' => array('sales.destroy', $sale->id), 'method' => 'delete')) !!}
						<button type="submit" class="btn btn-danger btn-mini">Delete</button>
						{!! Form::close() !!}
						<button type="submit" ><a href="/sales/{{$sale->id}}">Edit</a></button></td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

</body>

	
@stop


