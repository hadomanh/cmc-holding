@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h3>{{ $news->title }}</h3>

        <br>

        {!! $news->content !!}
    </div>
@endsection
