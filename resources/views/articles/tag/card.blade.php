<div class="w-full flex flex-col mb-8 rounded-leon bg-dark_two lg:p-6">
    <div class="w-full lg:flex lg:rounded-lg">

        <img src="https://i.gyazo.com/80c4d570a0f87ba307466fde8bb4f559.jpg" class="u-article-home-sumbnail lg:rounded-lg">

        <div class="pl-6 w-full flex flex-col justify-between">

          <div class="w-full flex items-center justify-between">

              <div class="flex items-center">
                  <a href="{{ route('users.show', ['name' => $article->user->name]) }}" class="inline-block">
                      <img class="w-8 h-8 rounded-full dark-shadow"　src="https://i.gyazo.com/22bfd9b571fe0c10f6a1ac5404637e43.png" alt="">
                  </a>
                  <a href="{{ route('users.show', ['name' => $article->user->name]) }}" class="inline-block ml-4 text-gray_two">
                      {{ $article->user->name }}
                  </a>
              </div>

              <div class="font-weight-lighter text-xs text-gray_two cursor-default">
                  {{ $article->created_at->format('Y/m/d H:i') }}
              </div>

          </div>

          <h2 class="text-2xl font-bold mt-8 mb-4">
              <a href="{{ route('articles.show', ['article' => $article]) }}">
                  {{ $article->title }}
              </a>
          </h2>

            {{-- @if( Auth::id() === $article->user_id )
            <!-- dropdown -->
              <div class="ml-auto card-text">
                <div class="dropdown">
                  <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <button type="button" class="btn btn-link text-muted m-0 p-2">
                      <i class="fas fa-ellipsis-v"></i>
                    </button>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="{{ route("articles.edit", ['article' => $article]) }}">
                      <i class="fas fa-pen mr-1"></i>記事を更新する
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item text-danger" data-toggle="modal" data-target="#modal-delete-{{ $article->id }}">
                      <i class="fas fa-trash-alt mr-1"></i>記事を削除する
                    </a>
                  </div>
                </div>
              </div>
              <!-- dropdown -->

              <!-- modal -->
              <div id="modal-delete-{{ $article->id }}" class="modal fade" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="閉じる">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <form method="POST" action="{{ route('articles.destroy', ['article' => $article]) }}">
                      @csrf
                      @method('DELETE')
                      <div class="modal-body">
                        {{ $article->title }}を削除します。よろしいですか？
                      </div>
                      <div class="modal-footer justify-content-between">
                        <a class="btn btn-outline-grey" data-dismiss="modal">キャンセル</a>
                        <button type="submit" class="btn btn-danger">削除する</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
              <!-- modal -->
            @endif --}}


            <div class="">
                @foreach($article->tags as $tag)
                    @if($loop->first)
                    <div class="pt-0 pb-4">
                        <div class="">
                    @endif
                        <a href="{{ route('tags.show', ['name' => $tag->name]) }}" class="border p-1 mr-2 mt-1 text-muted text-gray_two">
                            {{ $tag->hashtag }}
                        </a>
                    @if($loop->last)
                        </div>
                    </div>
                    @endif
                @endforeach
            </div>



            <div class="mt-4 pt-4 flex w-full justify-between items-end
            ">

              <home-article-like
              :initial-is-liked-by='@json($article->isLikedBy(Auth::user()))'
              :initial-count-likes='@json($article->count_likes)'
              :authorized='@json(Auth::check())'
              endpoint="{{ route('articles.like', ['article' => $article]) }}"
              >
              </home-article-like>


              <div class="flex">
                  <a href="#" class="bg-primary font-semibold btn-up primary-shadow">Demo</a>
              </div>
              
          </div>
        </div>
    </div>
</div>
