<div class="bg-dark p-4 rounded-leon">

    {{-- 情報 --}}
    <div class="flex items-center mb-6">
        <a href="{{ route('users.show', ['name' => $article->user->name]) }}" class="text-dark">
          <i class="fas fa-user-circle fa-3x mr-1"></i>
        </a>
        <div class="font-bold text-lg">
            <a href="{{ route('users.show', ['name' => $article->user->name]) }}" class="text-dark">
            {{ $article->user->name }}
        </div>
        <div class="ml-8 text-sm text-gray_two">{{ $article->created_at->format('Y/m/d H:i') }}</div>
    </div>

    {{-- タイトル --}}
    <h1 class="u-article-title font-bold my-4">{{ $article->title }}</h1>

    {{-- タグ --}}
    <div class="mb-4">
        @foreach($article->tags as $tag)
            @if($loop->first)
            <div class="pt-0 pb-4 pl-3">
                <div class="">
            @endif
                <a href="{{ route('tags.show', ['name' => $tag->name]) }}" class="border p-1 mr-2 mt-1 text-gray_two">
                    {{ $tag->hashtag }}
                </a>
            @if($loop->last)
                </div>
            </div>
            @endif
        @endforeach
    </div>

    {{-- 本文 --}}
    <div class="my-4 pt-0 pb-2">
        <div class="markdown" data-content>
          {!! $article->mark_body!!}
        </div>
    </div>

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



</div>
