@extends('layout.main')

@section('content')
    <div class="container">
        <div class="row row-cols-2 ">
            @foreach ($movies as $item)
                <div class="col">
                    <div class="card">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <p>{{ $item->title }}</p>
                            <p>{{ $item->original_title }}</p>
                            <p>{{ $item->nationality }}</p>
                            <p>{{ $item->date }}</p>
                            <p>{{ $item->vote }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
