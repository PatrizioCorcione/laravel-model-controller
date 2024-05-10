@extends('layout.main')

@section('content')
    @foreach ($movies as $item)
        <h1>{{ $item->title }}</h1>
    @endforeach
@endsection
