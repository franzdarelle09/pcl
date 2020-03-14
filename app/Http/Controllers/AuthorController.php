<?php

namespace App\Http\Controllers;

use App\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function index()
    {
    	$authors = Author::orderBy('name')->get();
    	return view('admin.authors',compact('authors'));
    }

    public function create()
    {
    	$positions = ['Councilor','Vice Mayor','Mayor','Department Heads','SB MEMBER','Employee'];
    	return view('admin.authors_add',compact('positions'));
    }

    public function store(Request $request)
    {
        if ($request->hasFile('image')){
            $fileNameWithExtension = $request->file('image')->getClientOriginalName();
            $filename = pathinfo($fileNameWithExtension,PATHINFO_FILENAME);
            $extension = $request->file('image')->guessClientExtension();
            $filaNameToStore = time().'_'.$filename.'.'.$extension;
            $path = $request->file('image')->storeAs('public/documents',$filaNameToStore);
        }else{
            $filaNameToStore = '';
        }

        $author = ($request->input('author_id') !== NULL)  ? Author::findOrFail($request->author_id) : new Author;
        $author->id = $request->input('author_id');
        $author->name = $request->input('fname').' '.$request->input('lname');
        $author->position = $request->input('position');
        $author->photo = $filaNameToStore;
        $author->status = 1;

        if($author->save()){
            return redirect('admin/authors');
        }
    }

    public function delete(Request $request)
    {
        $author = Author::find($request->input('author_id'));
        $author->delete();
        echo 'deleted';
    }
}
