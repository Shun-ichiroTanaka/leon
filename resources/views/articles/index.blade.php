@extends('app')

@section('title', '記事一覧')

@section('content')

<div class="wrapper-home">
    @include('layout.header.home')

    <div class="w-full justify-center">

        @include('articles.home.hero')


        <div class="wrapper-content">
            <div class="u-article-home-leftside p-4 mt-4 rounded-lg mr-8">
                <h2 class="text-xl text-center font-bold text-gray_two mb-4">
                    Tags
                </h2>
                <ul>
                    @if ($tags != null)
                        @foreach($tags as $tag)
                            <li>
                                <a href="{{ route('tags.show', ['name' => $tag->name]) }}" class="inline-block m-1 text-muted text-gray">
                                    {{ $tag->hashtag }}
                                </a>
                            </li>
                        @endforeach
                    @endif
                </ul>
            </div>

            <div class="flex w-full">
                <div class="min-w-0 flex flex-wrap px-4 sm:px-6 xl:px-8 pt-10 pb-24 lg:pb-16">
                    @if ($articles != null)
                        @foreach($articles as $article)
                            @include('articles.home.card')
                        @endforeach
                    @endif
                </div>
                <div class="hidden xl:text-sm xl:block flex-none w-64 pl-8 mr-8"></div>
            </div>
        </div>

    </div>
</div>

@endsection
