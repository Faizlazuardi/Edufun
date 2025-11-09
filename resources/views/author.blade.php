@extends('layout.tamplate')
@section('content')
    <div class="mt-5 container">
        <div class="d-flex flex-column gap-4">
            <h3>Our Writers:</h3>
            <div class="d-flex justify-content-center gap-5">
                @foreach ($authors as $author)
                    <div class="d-flex flex-column justify-content-center gap-3">
                        <img src={{ $author->profile_picture }} alt="" srcset="" class="border rounded-circle" width =150 height=150>
                        <h5>{{ $author->name }}</h5>
                        <p>{{ $author->specialization }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
