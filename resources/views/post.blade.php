<x-layout>
    <x-slot name="content">
        <article>
            <h1>{{ $post->title; }}</h1>
                <div>
                    {!! $post->body; !!}
                </div>
        </article>
        <a href="/">go back</a>
    </x-slot>
</x-layout>
{{-- <!DOCTYPE html>
<title>My Blog</title>
<link rel="stylesheet" href="/app.css">
<body>
    <article>
        <h1>{{ $post->title; }}</h1>
        <div>
            {!! $post->body; !!}
        </div>
    </article>
    <a href="/">go back</a>
</body> --}}
