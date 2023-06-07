@extends('layout.app')

@section('content')
    <section class="container">
        <h1>{{ $book->title }}</h1>
        <p>{{ $book->plot }}</p>
        <img src="{{ $book->cover_image }}" alt="{{ $book->title }}">

    </section>
@endsection
