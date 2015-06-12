@extends('layout')
@section('content')

{!! Form::open(['url'=>'clients']) !!}
{!! Form::label('name', 'Name:') !!}

{!! Form::text('name') !!}
{!! Form::label('lastname', 'Lastname:') !!}

{!! Form::text('lastname') !!}
{!! Form::label('nit', 'Nit:') !!}

{!! Form::text('nit') !!}


<br>
<br>
{!! Form::submit('Save') !!}
{!! Form::close() !!}

@stop