<?php
namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;
class PostController extends Controller
{
  /*  public function index ()
    {
        return view ('index', [
            'posts' => Post::latest()->paginate()
        ]);
    }*/

    public function index(){
        $post =Post::latest()->paginate();
        return view('index', compact('post'));
    }

}
