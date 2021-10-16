<x-layout>
    <x-slot name="content">
        @foreach($posts as $post)
            <article>
                <h1>
                    <a href="/posts/{{$post->id;}}">
                        {{$post->title;}}
                    </a>
                </h1>
                    <div>
                        {{$post->excerpt;}}
                    </div>
                <p>{{$post->created_at;}}</p>
            </article>
        @endforeach
    </x-slot>
</x-layout>

