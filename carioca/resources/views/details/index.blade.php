list of details:
@extends('layout')
@section('content')



	@foreach ($details as $detail)

					<div class="panel-heading">
		<h2>product={{$detail->product_id}}</h2>
		<br>
		<h2>sale={{$detail->sale_id}}</h2>
						
						
						
						
	@endforeach





	

	
@stop