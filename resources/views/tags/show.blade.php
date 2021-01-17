@extends('app')

@section('title', $tag->hashtag)

@section('content')

  <div class="wrapper-home">
    @include('layout.header.home')

    <div class="w-full bg-dark_two mb-8 py-16">
      <div class="">
        <h2 class="text-center text-4xl font-bold my-2">{{ $tag->hashtag }}</h2>
        <div class="text-center">
          <span class="text-3xl font-bold">{{ $tag->articles->count() }}</span>
          件
        </div>
      </div>
    </div>

    <div class="wrapper-content">
        <div class="u-article-home-leftside p-4 mt-4 rounded-lg mr-8">
        </div>

        <div class="flex w-full">
            <div class="w-full min-w-0 flex flex-wrap px-4 sm:px-6 xl:px-8 pt-10 pb-24 lg:pb-16">
              @foreach($tag->articles as $article)
                @include('articles.tag.card')
              @endforeach
            </div>
            <div class="hidden xl:text-sm xl:block flex-none w-64 pl-8 mr-8"></div>
        </div>
    </div>



  </div>
@endsection
