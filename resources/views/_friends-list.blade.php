<h3 class="font-bold text-xl mb-4">Following</h3>

<ul>
    @foreach (auth()->user()->follows as $user)
        <li class="mb-4">
            <div class="flex items-center text-sm">
                <a href="{{ route('profile', $user) }}">
                    <img class="rounded-full mr-2" src="{{ $user->avatar }}" alt="Avatar">
                </a>

                {{ $user->name }}
            </div>
        </li>
    @endforeach
</ul>
