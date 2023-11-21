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
                <div class="grid grid-cols-3 my-10">





                    {{dd($user);}}

            </div>
        </body>
</html>
