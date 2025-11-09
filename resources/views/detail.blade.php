@extends('layout.tamplate')
@section('content')
    <div class="my-5 container">
        <h1>{{ $categoryName }}</h1>
        <div class="d-flex flex-column gap-3">
            <img src={{ $article->image }} alt="" class="border rounded w-100" width="400" height="240"
                style="height: 600px; object-fit: cover; object-position: center;"
            >
            <h2>{{ $article->title }}</h2>
            <p>{{ $article->created_at->format('d F Y') }} | By: {{ $article->author->name }}</p>
            <h4>{{ $article->content }}</h4>
        </div>
    </div>
@endsection
