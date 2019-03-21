<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Posts;

class AdminPostsController extends Controller
{
    public function index()
    {
        $posts = Posts::paginate(7);
        return view('admin.edv.view', compact('posts'));
    }
    public function create()
    {
        //create to 
        return view('admin.edv.create');
    }
    public function store(Request $request)
    {
        //in to database
        $this->validate($request,[
            'title'=>'required',
            'content'=>'required',
            'cont_sum'=>'required',
            'embed'=>'required',
            'publisher'=>'required',
            'created_at'=>'required',
            'id'=>'required',
            'category'=>'required',
            'slug'=>'required',
            'viewed'=>'required',
            'updated_at'=>'required'
            ]);

            $post = Posts::create($request->all());

            return redirect()->route('admin.edv.view')->with('message', 'Artikel berhasil dibuat!');

    }
    public function show($id)
    {
        //
    }
    public function edit($id)
    {
        $posts = Posts::find($id);
        return view('admin.edv.edit', compact('posts', 'id'));
    }
    public function update(Request $request, $id)
    {
        //
    }
    public function destroy($id)
    {
        //
    }
}
