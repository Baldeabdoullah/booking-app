@extends('app')

@section('content')
    <h1>Hello world</h1>
    <a href="{{ route('books.create') }}">Creer un livre</a>
@endsection
