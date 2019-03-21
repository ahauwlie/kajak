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
        //
    }
    public function store(Request $request)
    {
        //
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
