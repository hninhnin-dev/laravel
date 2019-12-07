<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function about()
    {
        return view('about');
    }

    public function services()
    {
        return view('services');
    }

    public function contact()
    {
        return view('contact-us');
    }

    public function article()
    {
        $post = new Post();
        $list = $post->latest()->paginate(10);
        return view('article', compact('list'));
    }

    public function detail(Post $post, $id)
    {
        $info = $post->find($id);
        $recent = $post->orderBy("id", "desc")->limit(5)->get();
        return view('detail', compact('recent', 'info'));
    }

    public function search(Request $request)
    {
        $request->validate([
           'keyword' => 'required'
        ]);

        $post = new Post();
        $list = $post->where('title', "LIKE", "%{$request->keyword}%")->orWhere("description", "LIKE", "%{$request->keyword}%")->paginate(10);
        return view('article', compact('list'));
    }

    public function categoralize($id)
    {
        $post = new Post();
        $list = $post->where("category_id", $id)->paginate(10);
        return view('article', compact('list'));
    }
}
