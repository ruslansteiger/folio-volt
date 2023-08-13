<!DOCTYPE html>
<html lang="en_GB" class="h-full">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <title>{{ config('app.name') }}</title>

        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class="grid min-h-full place-content-center antialiased">
        {{ $slot }}
    </body>
</html>
