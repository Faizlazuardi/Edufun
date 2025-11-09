@extends('layout.tamplate')
@section('content')
<div class="my-5">
    <img
        src={{ asset('HeroImage.jpg') }}
        alt=""
        class="w-100"
        style="height: 600px; object-fit: cover; object-position: center;"
    >
    <div class="d-flex flex-column gap-4 my-5 container">
        @foreach ($articles as $article )
            <div class="d-flex gap-3">
                <img src={{ $article->image }} alt="" class="border rounded" width="400" height="240">
                <div class="my-auto">
                    <div class="w-100">
                        <h2>{{ $article->title }}</h2>
                        <p>{{ $article->created_at->format('d F Y') }} | By: {{ $article->author->name }}</p>
                        <h4>{{ Str::limit($article->content, 100) }}</h4>
                    </div>
                    <div class="d-flex justify-content-end">
                        <a href={{ route('articleDetail',$article) }} class="px-4 py-2 rounded-pill btn btn-dark">read more...</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
