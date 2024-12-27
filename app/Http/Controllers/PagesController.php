<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Post;

class PagesController extends Controller
{
    public function index()
    {
        $posts = DB::table('posts')
        ->join('users', 'posts.user_id', '=', 'users.id')
        ->select('posts.*', 'users.name as user_name')
        ->get();
        return view('index', compact('posts'));
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }
}
