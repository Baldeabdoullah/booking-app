@extends('app')

@section('content')
    <h1>Creer un livre</h1>

    <form action="{{ route('books.store') }}" method="POST">
        @csrf
        <input type="text" name="title" id="">
        <button type="submit">creer</button>
    </form>
@endsection
