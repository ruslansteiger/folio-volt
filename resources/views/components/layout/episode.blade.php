<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Laravel News Podcast Player</title>
        @vite(["resources/css/app.css", "resources/css/app.js"])
    </head>
    <body class="min-h-screen bg-gray-50 font-sans text-black antialiased">
        <div class="mx-auto max-w-2xl px-6 py-24">
            @persist("logo")
                <x-logo />
            @endpersist

            <div class="py-10">{{ $slot }}</div>

            @persist("player")
                <x-episode-player />
            @endpersist
        </div>
    </body>
</html>
