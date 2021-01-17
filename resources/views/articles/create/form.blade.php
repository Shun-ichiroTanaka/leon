@csrf

  <input
    type="text"
    name="title"
    class="bg-dark_two font-bold w-full focus:outline-none text-3xl u-article-create-title px-2"
    placeholder="タイトル"
    required
    value="{{ $article->title ?? old('title') }}">


  <article-tags-input
    :initial-tags='@json($tagNames ?? [])'
    :autocomplete-items='@json($allTagNames ?? [])'>
  </article-tags-input>

  <article-markdown
    :old-body='@json($article->body ?? old('body'))'>
  </article-markdown>
