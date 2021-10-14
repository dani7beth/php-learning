<!DOCTYPE html>
<title>My Blog</title>
<link rel="stylesheet" href="/app.css">
<body>
    <?php foreach($posts as $post) : ?>
        <article>
           <h1> <a href="/posts/{{$post->slug;}}">{{$post->title;}}</a></h1>
           <div>
            {{$post->excerpt;}}
           </div>
           <p>{{$post->date;}}</p>
        </article>
    <?php endforeach; ?>
    <!-- <article>
        <h1><a href="/posts/my-first-post">Blog Post #1</a></h1>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
            et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
            aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
            velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
            sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>
    </article>
    <article>
        <h1><a href="/posts/my-second-post">Blog Post #2</a></h1>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
            et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
            aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
            velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
            sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>
    </article>
    <article>
        <h1><a href="/posts/my-third-post">Blog Post #3</a></h1>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
            et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
            aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
            velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
            sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>
    </article> -->
</body>
