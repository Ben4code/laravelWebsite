@extends('layouts.app')
@section('content')
<h1>Messages</h1>

    @if(count($emails) > 0)
        @foreach($emails as $email)
            <ul class="list-group">
                <li class="list-group-item">Name:       {{ $email->name }}</li>
                <li class="list-group-item">Email:      {{ $email->email }}</li>
                <li class="list-group-item">Messages:   {{ $email->messages }}</li>
            </ul>
        @endforeach
    @endif

@endsection

@section('sidebar')
@parent
<p>This is a second paragraph</p>
@endsection