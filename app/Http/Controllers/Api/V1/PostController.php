<?php
//asegurarme que esté bien escrito desde su creación
namespace App\Http\Controllers\V1;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
//traemos el resource al controller v1
use App\Http\Resources\V1\PostResource;


class PostController extends Controller
{
    /*Display a listing of the resource.
    notar que asi obtenemos el beneficio en el sistema de estar utilizando
    la misma clase del resource dentro del metodo colección
     */
    public function index()
    {
        return PostResource::collection(Post::latest()->paginate());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /* Display the specified resource.
     llamamos al recurso a traves de una función
     el recurso especifica el formato de como devolcer
     la información que sería como se consume la api
     independientemente de como sea tu bdd
     */
    public function show(Post $post)
    {
        return new PostResource($post);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /* Remove the specified resource from storage.

     */
    public function destroy(Post $post)
    {
        $post->delete();
        return response()->json(null, 204);
    }
}
