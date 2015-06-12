@extends('layout')
@section('content')

{!! Form::open(['url'=>'sales']) !!}
{!! Form::label('Client', 'Client:') !!}


{!! Form::select('client_id', $clients, null, ['class' => 'form-control']) !!}


<br>
<br>
{!! Form::submit('Save') !!}
{!! Form::close() !!}

@stop