<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function showAll()
    {

        $posts = Post::all();

        return view('admin', ['posts' => $posts]);
    }

    public function create(Request $request)
    {

        $post = new Post();
        $post->title = $request->title;
        $post->description = $request->description;
        $post->category = $request->category;
        $post->author = $request->author;
        $post->content = $request->content;

        $post->save();

        return redirect('/admin');
    }

    public function view($id)
    {

        $post = Post::findOrFail($id);

        return view('admin', ['post' => $post]);
    }

    public function delete($id)
    {
        $result = Post::findOrFail($id)->delete();
        return redirect('/admin');
    }


    public function index()
    {
        return view('home');
    }

    public function post()
    {
        return view('article');
    }

    public function search(Request $request)
    {
        // Get the search value from the request
        $search = $request->input('search');

        // Search in the title and body columns from the posts table
        $posts = Post::query()
            ->where('title', 'LIKE', "%{$search}%")
            ->orWhere('description', 'LIKE', "%{$search}%")
            ->orWhere('content', 'LIKE', "%{$search}%")
            ->orWhere('author', 'LIKE', "%{$search}%")
            ->orWhere('category', 'LIKE', "%{$search}%")
            ->get();

        // Return the search view with the resluts compacted
        return view('post', compact('posts'));
    }

    // public function showAllPosts()
    // {
    //     $categories = DB::table('categories')->get();
    //     echo '<pre>';
    //     var_dump($categories);
    //     echo '</pre>';

    //     return view('showPosts', $categories);
    // }
}
