<x-layout>
    <x-slot name="content">
        <article>
            <h1>{{ $post->title; }}</h1>
                <div>
                    {!! $post->body; !!}
                </div>
            <p>
                Category: {{$post->category->name}}
            </p>
        </article>
        <a href="/">go back</a>
    </x-slot>
</x-layout>

