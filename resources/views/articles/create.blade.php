@extends('app')

@section('title', '記事投稿')

@section('content')

<div class="wrapper-create relative">
    @include('layout.header.create')

    <div class="u-article-wrapper w-full h-full flex justify-center">
        @include('error_card_list')
        <form method="POST" action="{{ route('articles.store') }}" class="h-full flex flex-col">
            @include('articles.create.form')
            <button type="submit" class="u-article-create-position bg-primary text-white px-4 py-3 rounded inline-block">投稿する</button>
        </form>
    </div>

</div>

@endsection
