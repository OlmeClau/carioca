








@extends('layout')
@section('content')



	




	
<html lang="en">
<head>
  <title>carioca</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Sale</h2>
             
  <table class="table table-bordered">
   
    <tbody>
	
    
      <tr>
        <td>
        @foreach ($clients as $client)
				@if($client->id == $sale->client_id)

						<div class="info">
						<br>
							<h4>Name= {{$client->name}}</h4>
							
							<h4>Lastname= {{$client->lastname}}</h4>
							
							<h4>Nit= {{$client->nit}}</h4>
							
						</div>	
				@endif
				@endforeach

        	


        </td>
        
       
      </tr>
      <tr>
      <td><h2>Products</h2></td>
      </tr>
      <td>
<table class="table table-bordered">
    <thead>
      <tr class="danger">
        <th>Name</th>
        <th>Price</th>
        <th>Quantity</th>
        <th> Total per product</th>
      
      </tr>
    </thead>
    <tbody>
    @foreach ($details as $detail)
								@if($detail->sale_id == $sale->id)
										@foreach ($products as $product)
											@if($detail->product_id + 1 == $product->id)
											<tr class="success">

												
													<td>{{$product->name}}</td>
													
													<td>{{$product->price}}</td>
													<td>{{$detail->cant}}</td>

													<td>{{$product->price * $detail->cant}}</td>
													<td>{!! Form::open(array('route' => array('details.destroy', $detail->id), 'method' => 'delete')) !!}
						<button type="submit" >Delete</button>
						{!! Form::close() !!}<a style="color: #FFFFFF">{{$aux= $aux + ($product->price * $detail->cant)}}</a></td>
											</tr>	

													
													
												@endif
										@endforeach

								@endif
						@endforeach

<tr  class="danger">
	<th> TOTAL</th>
	<th>{{$aux}}</th>
</tr>

	
    </tbody>
  </table>












      	



      </td>
      <tr>
      	


      	<td>
      		
<h4>Choose your products: </h4>
<br>
{!! Form::open(['url'=>'details']) !!}



{!! Form::select('product_id', $products_select, null, ['class' => 'form-control']) !!}

{!! Form::label('Quantity', 'Quantity:') !!}

{!! Form::text('cant') !!}


<br>


<br>
<br>
{!! Form::hidden('sale_id', $sale->id) !!}
{!! Form::submit('Save') !!}
{!! Form::close() !!}



      	</td>
      </tr>
     
    </tbody>
  </table>
</div>

</body>

	
@stop



