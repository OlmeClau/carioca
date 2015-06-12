@extends('layout')
@section('content')

{!! Form::open(['url'=>'products']) !!}
{!! Form::label('name', 'Name:') !!}

{!! Form::text('name') !!}
{!! Form::label('price', 'price:') !!}

{!! Form::text('price') !!}
{!! Form::label('Quantity', 'Quantity:') !!}

{!! Form::text('cant') !!}


<br>
<br>
{!! Form::submit('Save') !!}
{!! Form::close() !!}

@stop