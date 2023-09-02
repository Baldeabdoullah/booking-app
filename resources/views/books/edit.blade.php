@extends('app')

@section('content')
    <h1>Creer un livre</h1>

    <form action="{{ route('books.update', $book) }}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="title" id="" value="{{ $book->title }}">
        <button type="submit">Editer</button>

        <button type="submit">Supprimer</button>
    </form>
@endsection
