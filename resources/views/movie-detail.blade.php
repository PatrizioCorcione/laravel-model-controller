@extends('layout.main')
@section('content')
    <div class="container my-5 ">
        <div class="row row-cols-2 ">
            <div class="col text-black ">
                <img class="detail-img" src="{{ $movies->img }}" alt="">
            </div>
            <div class="col text-black fw-bold ">
                <h2>{{ $movies->title }}</h2>
                <h3>{{ $movies->original_title }}</h3>
                <p>{{ $movies->plot }}</p>
            </div>
        </div>
    </div>
@endsection
