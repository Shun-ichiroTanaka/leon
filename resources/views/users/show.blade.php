@extends('app')

@section('title', $user->name)

@section('content')
  <div class="wrapper-home">
        @include('layout.header.home')

        <div class="w-full justify-center">


            <div class="wrapper-content">
                <div class="u-user-left f-sticky top-16 p-4 mt-4 rounded-lg">
                    @include('users.user')
                </div>

                <div class="flex w-full">
                    <div class="min-w-0 flex flex-wrap px-4 sm:px-6 xl:px-8 pt-10 pb-24 lg:pb-16">

                        @include('users.tabs', ['hasArticles' => true, 'hasLikes' => false])

                        @foreach($articles as $article)
                            @include('articles.card')
                        @endforeach
                    </div>

                    <div class="hidden xl:text-sm xl:block flex-none w-64 pl-8 mr-8">
                    </div>
                </div>
            </div>

        </div>
  </div>
@endsection
