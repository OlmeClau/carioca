







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
  <h2>Products</h2>
             
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Name</th>
        <th>Price</th>
        <th>Quantity</th>
        <th>Options</th>
      </tr>
    </thead>
    <tbody>
	@foreach ($products as $product)
    
      <tr>
        <td>{{$product->name}}</td>
        <td>{{$product->price}}</td>
        <td>{{$product->cant}}</td>
        <td>{!! Form::open(array('route' => array('products.destroy', $product->id), 'method' => 'delete')) !!}
						<button type="submit" class="btn btn-danger btn-mini">Delete</button>
						{!! Form::close() !!}
						<button type="submit" ><a href="/products/{{$product->id}}/edit">Edit</a></button></td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

</body>

	
@stop


