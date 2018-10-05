<?php

namespace App\Http\Controllers;

use App\Posts;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id = null)
    {   
        if(!$id) {
            return Posts::orderBy('created_at','desc')->get();
        } else {
            return $this->search($id);
        }
    }

    /**
     * Search for posts
     *
     * @return \Illuminate\Http\Response
     */
    public function search($id)
    {
        return Posts::find($id);
    }    
    
    public function store(Request $request)
    {
        Posts::create($request->all());
        return (['message' => 'post added']);
    }
    
    public function destroy(Request $request, $id) 
    {
        $post = Posts::findOrFail($id);
        $post->delete();
        return (['message' => 'post deleted']);
    } 
     public function update(Request $request, $id) 
    {
        Posts::where('id', $id)->update($request->all());
        return (['message' => 'post updated']);
    }
 
}
