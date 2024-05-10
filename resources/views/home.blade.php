@extends('layout.main')

@section('content')
    <div class="container my-5 ">
        <div class="row row-cols-2 ">
            @foreach ($movies as $item)
                <div class="col my-2 ">
                    <a href="{{ route('dettagliFilm', ['id' => $item->id]) }}">
                        <div class="card flex-row">
                            <img src="{{ url($item->img) }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p>Titolo: {{ $item->title }}</p>
                                <p>Origine: {{ $item->nationality }}</p>
                                <p>Uscita: {{ $item->date }}</p>
                                <p>Voto: {{ $item->vote }}</p>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
