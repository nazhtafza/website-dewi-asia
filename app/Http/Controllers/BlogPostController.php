<?php
namespace App\Http\Controllers;

use App\Models\BlogPost;
use Illuminate\Http\Request;

class BlogPostController extends Controller
{
    // Method to display all blog posts
    public function index()
    {
        // Retrieve all blog posts from the database
        $posts = BlogPost::all();

        // Pass the posts to the view
        return view('blog', compact('posts'));
    }

    // Method to display a single blog post
    public function show($slug)
    {
        // Retrieve the blog post by slug
        $post = BlogPost::where('slug', $slug)->firstOrFail();

        // Pass the post to the view
        return view('show', compact('post'));
    }
}
