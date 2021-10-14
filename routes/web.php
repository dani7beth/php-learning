<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use Illuminate\Support\Facades\File;
use Spatie\YamlFrontMatter\YamlFrontMatter;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $posts = Post::all();
    // $files = File::files((resource_path("posts")));

    // $posts = [];

//    $posts = collect($files)->map(function($file){
//         $document = YamlFrontMatter::parseFile($file);
//         return new Post(
//             $document->title,
//             $document->excerpt,
//             $document->date,
//             $document->body(),
//             $document->slug
//         );

//     });
    // $posts = collect(File::files(resource_path("posts")))
    //     ->map(fn($file) => YamlFrontMatter::parseFile($file))
    //     ->map(fn($document) => new Post(
    //         $document->title,
    //         $document->excerpt,
    //         $document->date,
    //         $document->body(),
    //         $document->slug
    //     ));
    // ddd($posts);

    // $posts = array_map(function($file){
    //     $document = YamlFrontMatter::parseFile($file);

    //     return new Post(
    //         $document->title,
    //         $document->excerpt,
    //         $document->date,
    //         $document->body(),
    //         $document->slug
    //     );
    // },$files);

    // foreach($files as $file){
    //     $posts[] = new Post(
    //         $document->title,
    //         $document->excerpt,
    //         $document->date,
    //         $document->body(),
    //         $document->slug
    //     );
    // }
    return view('posts', [
        'posts' => $posts
    ]);
});
Route::get('posts/{post}', function ($slug) {


    return view('post', [
        'post' => Post::find($slug)
    ]);
})->where('post','[A-z_\-]+');