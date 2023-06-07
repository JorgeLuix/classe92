@extends('layout.app')

@section('content')
    <section class="container">
        <h1>Home page</h1>
        <ul>
            @foreach ($books as $book)
                <li><a href="{{ route('books.show', ['id' => $book->id]) }}">{{ $book->title }}</a></li>
            @endforeach
        </ul>
    </section>
@endsection
