<div class="rounded-leon bg-dark_two py-4 px-8 overflow-hidden shadow">
    <div class="flex items-start">
      <a href="{{ route('users.show', ['name' => $user->name]) }}" class="flex justify-center">
        <img src="https://i.imgur.com/8Km9tLL.jpg" class="w-12 h-12 object-cover inline-flex rounded-full border-solid border-white border-2 flex-shrink-0">
      </a>
      <div class="px-3 pb-6 pt-2">
          <a href="{{ route('users.show', ['name' => $user->name]) }}" class="text-2xl font-bold">{{ $user->name }}</a>
      </div>
    </div>

    <p class="mb-4 font-light text-gray_two">Hello, i'm from another the other side!</p>

  @if( Auth::id() !== $user->id )
    <follow-button
        class="ml-auto"
        :initial-is-followed-by='@json($user->isFollowedBy(Auth::user()))'
        :authorized='@json(Auth::check())'
        endpoint="{{ route('users.follow', ['name' => $user->name]) }}"
    >
    </follow-button>
  @endif

    <div class="flex justify-center text-grey-dark">
    <a href="{{ route('users.followings', ['name' => $user->name]) }}" class="text-center inline-block mr-3 border-r pr-3">
      <h2>{{ $user->count_followings }}</h2>
      <span class="text-gray_two">Follow</span>
    </a>
    <a href="{{ route('users.followers', ['name' => $user->name]) }}" class="text-center inline-block mr-3 border-r pr-3">
        <h2>{{ $user->count_followers }}</h2>
        <span class="text-gray_two">Follower</span>
    </a>
    <a href="{{ route('users.followers', ['name' => $user->name]) }}" class="text-center inline-block mr-3 border-r pr-3">
        <h2>0</h2>
        <span class="text-gray_two">liked</span>
    </a>
    <a href="{{ route('users.followers', ['name' => $user->name]) }}" class="text-center inline-block">
        <h2>0</h2>
        <span class="text-gray_two">Tutorials</span>
    </a>
    </div>
</div>
