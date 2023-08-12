<ul>
    @foreach (\App\Models\User::all() as $user)
        <li>
            <a href="/users/{{ $user->id }}">{{ $user->name }}</a>
        </li>
    @endforeach
</ul>
