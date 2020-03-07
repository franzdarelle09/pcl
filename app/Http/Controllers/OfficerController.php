<?php

namespace App\Http\Controllers;

use App\Officers;
use App\Town;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class OfficerController extends Controller
{
    public function index()
    {
    	$officers = Officers::orderBy('id')->get();
    	return view('admin.officer_list',compact('officers'));
    }

    public function create()
    {
        $towns = Town::orderBy('name')->get();
    	return view('admin.officer_create',compact('towns'));
    }

    public function store(Request $request)
    {

        if ($request->hasFile('photo')){
            $fileNameWithExtension = $request->file('photo')->getClientOriginalName();
            $filename = pathinfo($fileNameWithExtension,PATHINFO_FILENAME);
            $extension = $request->file('photo')->guessClientExtension();
            $filaNameToStore = time().'_'.$filename.'.'.$extension;
            $path = $request->file('photo')->storeAs('public/officers',$filaNameToStore);

            $image = Image::make(public_path('storage/officers/'.$filaNameToStore))->fit(360,420);
            $image->save();
        }else{
            $filaNameToStore = '';
        }
        
        $o = ($request->input('officer_id') !== NULL)  ? Officers::findOrFail($request->officer_id) : new Officers;
        $o->id = $request->input('officer_id');
        $o->position = $request->input('position');
        $o->fname = $request->input('fname');
        $o->lname = $request->input('lname');
        $o->achievements = $request->input('achievements');
        $o->town = $request->input('town');
        if($filaNameToStore != ""){
        	$o->photo = $filaNameToStore;
        }
        if($o->save()){
            return redirect('/admin/officers');
        }
    }

    public function edit($id)
    {
        $officer = Officers::find($id);
         $towns = Town::orderBy('name')->get();
        if(NULL !== $officer)
            return view('admin.officer_edit',compact('officer','towns'));
        else
            return redirect('admin/officers');
    }

    public function delete(Request $request)
    {
        $officer_id = $request->input('officer_id');
        $officer = Officers::find($officer_id);
        $officer->delete();
    }

}
