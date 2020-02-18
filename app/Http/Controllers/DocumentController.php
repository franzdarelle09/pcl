<?php

namespace App\Http\Controllers;

use App\Author;
use App\Document;
use App\Documentauthor;
use App\Town;
use App\Type;
use Auth;
use Illuminate\Http\Request;

class DocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(is_null(Auth::user()->town_id)){
            $documents = Document::orderBy('created_at','desc')->get();
        }else{
            $documents = Document::whereTownId(Auth::user()->town_id)->orderBy('created_at','desc')->get();
        }
        return view('admin.document_list',compact('documents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $towns = Town::orderBy('name')->get();
        $types = Type::where('name','!=','Others')->orderBy('name')->get();
        $authors = Author::orderBy('name')->get();
        return view('admin.document_add',compact('towns','types','authors'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if ($request->hasFile('document')){
            $fileNameWithExtension = $request->file('document')->getClientOriginalName();
            $filename = pathinfo($fileNameWithExtension,PATHINFO_FILENAME);
            $extension = $request->file('document')->guessClientExtension();
            $filaNameToStore = time().'_'.$filename.'.'.$extension;
            $path = $request->file('document')->storeAs('public/documents',$filaNameToStore);
        }else{
            $filaNameToStore = 'nofile.pdf';
        }

        $document = ($request->input('document_id') !== NULL)  ? Document::findOrFail($request->document_id) : new Document;
        $document->id = $request->input('document_id');
        $document->name = $request->input('name');
        $document->document_type = $request->input('document_type');
        $document->town_id = $request->input('town_id');
        $document->user_id = $request->input('user_id');
        $document->date_approved = $request->input('date_approved');
        if(NULL !== $request->input('is_private')){
            $is_private = $request->input('is_private');
        }else{
            $is_private = 0;
        }
        $document->is_private = $is_private;
        if(!($filaNameToStore == "nofile.pdf" && ($request->input('document_id') !== NULL)))
            $document->file = $filaNameToStore;
        
        
        if($document->save()){            
            //insert to document author
            
            $ad = Documentauthor::whereDocumentId($document->id);
            $ad->delete();
            foreach ($request->input('author') as $key => $a) {
                $da = new Documentauthor;
                $da->author_id = $a;
                $da->document_id = $document->id;
                $da->save();    
            }
            return redirect('admin/documents');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $document = Document::find($id);
        $towns = Town::orderBy('name')->get();
        $types = Type::where('name','!=','Others')->orderBy('name')->get();
        $authors = Author::orderBy('name')->get();
        $author_document = Documentauthor::whereDocumentId($document->id);
        $plucked_ad = $author_document->pluck('author_id');
        $author_ids = $plucked_ad->all();
        if(NULL !== $document)
            return view('admin.document_edit',compact('document','towns','types','authors','author_ids'));
        else
            return redirect('admin/documents');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function delete(Request $request){
        $documentauthor = Documentauthor::whereDocumentId($request->input('document_id'));
        $documentauthor->delete();

        $document = Document::find($request->input('document_id'));
        $document->delete();
        echo "deleted";

    }
}
