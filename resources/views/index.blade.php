<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <body>
            @foreach ($posts as $post)
              <div>
                <h3>{{ $post->title }}</h3>
              </div>
            @endforeach

            {{ $posts->links() }}

    </body>
</html>
