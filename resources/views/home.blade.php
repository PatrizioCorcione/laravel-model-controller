@extends('layout.main')

@section('content')
    <div class="container">
        <div class="row row-cols-2 ">
            @foreach ($movies as $item)
                <div class="col">
                    <a class="text-decoration-none " href="{{ route('dettagliFilm', ['id' => $item->id]) }}">
                        <div class="card flex-row">
                            <img src="{{ url($item->img) }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p>{{ $item->title }}</p>
                                <p>{{ $item->nationality }}</p>
                                <p>{{ $item->date }}</p>
                                <p>{{ $item->vote }}</p>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
