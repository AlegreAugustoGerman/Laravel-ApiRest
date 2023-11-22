<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <title>Laravel</title>
    </head>
        <body class="bg-gray-100 text-grey-700">
            <div class="container mx-auto px-4">
{{--                 <div class="grid grid-cols-3 my-10">
                    {{dd($post);
                        dd($user);}}
                    @foreach ($post as $posts)
                        @foreach ($user as $users)
                        <div class="bg-white hover:bg-blue-100 border border-gray-200 p-5">
                            <h2 class="font-bold text-lg mb-4">{{$posts->title}} <h3>{{$users->email}}</h3> </h2>
                            <p class="text-xs">{{$posts->excerpt}}</p>
                            <p class="text-xs text-right">{{$posts->published_at}}</p>
                        </div>
                        @endforeach
                    @endforeach
                </div>
                <div class="mb-10">
                    {{$post->links()}}
                </div> --}}
                 <div class="grid grid-cols-3 my-10">
                    @foreach ($post as $posts)

                        <div class="bg-white hover:bg-blue-100 border border-gray-200 p-5">

                            <p class="text-xs">{{$posts->excerpt}}</p>
                            <p class="text-xs text-right">{{$posts->published_at}}</p>
                        </div>
                        @endforeach

                </div>
                <div class="mb-10">
                    {{$post->links()}}
                </div>
            </div>
        </body>
</html>
