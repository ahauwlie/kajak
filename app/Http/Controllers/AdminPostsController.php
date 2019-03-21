<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Posts;

class AdminPostsController extends Controller
{
    public function index()
    {
        $posts = Posts::all();
        return view('admin.edv.dashboard_data', compact('posts'));
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
            'category'=>'required',
            'content'=>'required',
            'slug'=>'required',
            'embed'=>'required',
            'publisher'=>'required',
            'cont_sum'=>'required'
        ]);
        $posts = new Posts([
            'title'    =>  $request->get('title'),
            'category'     =>  $request->get('category'),
            'content'     =>  $request->get('category'),
            'slug'     =>  $request->get('category'),
            'embed'     =>  $request->get('category'),
            'publisher'     =>  $request->get('category'),
            'cont_sum'     =>  $request->get('category')
        ]);
        $posts->save();
        return redirect()->route('admin.edv.create')->with('success', 'Data Added');
    }
    public function show($id)
    {
        $posts = Posts::find($id);
        return view('admin.edv.view', compact('posts', 'id'));
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
