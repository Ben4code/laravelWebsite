@extends('layouts.app')

@section('content')
<h1>Contact</h1>
   
@include('inc.messages')

{!! Form::open(['url' => 'contact/submit']) !!}
    <div class="form-group">
        {{Form::label('name', 'Name')}}
        {{Form::text('name', '', ['class' => 'form-control', 'placeholder'=>'Enter name'])}}
    </div>
    <div class="form-group">
        {{Form::label('Email', 'E-Mail Address')}}
        {{Form::text('email', '', ['class' => 'form-control', 'placeholder'=>'Enter email'])}}
    </div>
    <div class="form-group">
        {{Form::label('message', 'Message')}}
        {{Form::textarea('message', '', ['class' => 'form-control', 'placeholder'=>'Enter message'])}}
    </div>

    {{Form::submit('Send',['class' => 'btn btn-primary'])}}

{!! Form::close() !!}

@endsection