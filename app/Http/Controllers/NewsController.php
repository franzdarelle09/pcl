<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class NewsController extends Controller
{
    public function index()
    {
    	$news = News::orderBy('created_at')->get();
    	return view('admin.news_list',compact('news'));
    }

    public function create()
    {
    	return view('admin.news_create');
    }

    public function edit($id)
    {
    	$news = News::findOrFail($id);
    	return view('admin.news_edit',compact('news'));
    }

    public function store(Request $request)
    {

        if ($request->hasFile('cover_photo')){
            $fileNameWithExtension = $request->file('cover_photo')->getClientOriginalName();
            $filename = pathinfo($fileNameWithExtension,PATHINFO_FILENAME);
            $extension = $request->file('cover_photo')->guessClientExtension();
            $filaNameToStore = time().'_'.$filename.'.'.$extension;
            $path = $request->file('cover_photo')->storeAs('public/news',$filaNameToStore);

            $image = Image::make(public_path('storage/news/'.$filaNameToStore))->fit(683,456);
            $image->save();


        }else{
            $filaNameToStore = '';
        }

        $news = ($request->input('news_id') !== NULL)  ? News::findOrFail($request->news_id) : new News;
        $news->id = $request->input('news_id');
        $news->title = $request->input('title');
        $news->content = $request->input('content');
        if($filaNameToStore != ""){
        	$news->cover_photo = $filaNameToStore;
        	$news->image_photo = $filaNameToStore;
        }
        if($news->save()){
            return redirect('/admin/news');
        }
    }

    public function delete(Request $request){

        $news = News::find($request->input('news_id'));		
        $news->delete();
        echo "deleted";

    }
}
