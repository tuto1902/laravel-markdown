<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Markdown</title>

        @vite('resources/css/app.css')
    </head>
    <body class="font-sans">
        <div class="max-w-xl mx-auto mt-6 px-2 lg:px-0">
            <div class="prose lg:prose-xl">
                <x-markdown>
                    {!! $markdown !!}
                </x-markdown>
            </div>
        </div>
    </body>
