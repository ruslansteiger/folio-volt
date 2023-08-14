<!DOCTYPE html>
<html lang="en_GB" class="h-full">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Laravel</title>
        @vite("resources/css/app.css")
    </head>
    <body class="flex justify-center py-20 antialiased">
        <main>{{ $slot }}</main>
    </body>
</html>
