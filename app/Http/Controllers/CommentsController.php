<?php

namespace App\Http\Controllers;

use App\Comments;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id = null)
    {   
            return Comments::where('page_id', $id)->orderBy('created_at','desc')->get();
 
    }
    
    public function store(Request $request)
    {
        Comments::create($request->all());
        return (['message' => 'comment added']);
    }
    
 
}
