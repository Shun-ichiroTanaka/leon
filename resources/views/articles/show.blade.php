@extends('app')

@section('title', '記事詳細')

@section('content')

<div class="wrapper-show">
    @include('layout.header.show')

    <div class="flex w-full justify-center relative">
        <div class="u-article-leftside f-sticky break-words top-36 items-end justify-end my-4">
            <article-like
            :initial-is-liked-by='@json($article->isLikedBy(Auth::user()))'
            :initial-count-likes='@json($article->count_likes)'
            :authorized='@json(Auth::check())'
            endpoint="{{ route('articles.like', ['article' => $article]) }}"
            ></article-like>

            {{-- toc --}}
            <article-toc>></article-toc>
        </div>
        <div class="u-article-main container w-full">
          @include('articles.show.card')
        </div>
        <div class="u-article-right f-sticky top-36 right-0">
        </div>
    </div>

</div>

@endsection
