<ul>
    <li>
        <a class="font-bold text-lg mb-4 block" href="/tweet">Home</a>
    </li>
    <li>
        <a class="font-bold text-lg mb-4 block" href="{{ route('profile', current_user()) }}">Profile</a>
    </li>
    <li>
        <a class="font-bold text-lg mb-4 block" href="/explore">Explore</a>
    </li>
    <li>
        <form method="POST" action="/logout">
            @csrf

            <button class="font-bold text-lg">Logout</button>
        </form>
    </li>
</ul>
