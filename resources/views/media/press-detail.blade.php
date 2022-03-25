@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h3>{{ $press->title }}</h3>

        <br>

        {!! $press->content !!}
    </div>
@endsection
