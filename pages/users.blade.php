<ul>
    @foreach (\App\Models\User::all() as $user)
        <li>
            <a href="{{ route("user.show", ["user" => $user]) }}">
                {{ $user->name }}
            </a>
        </li>
    @endforeach
</ul>
