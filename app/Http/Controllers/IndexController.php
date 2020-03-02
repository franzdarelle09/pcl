<?php

namespace App\Http\Controllers;

use App\Announcement;
use App\Author;
use App\Document;
use App\Documentauthor;
use App\News;
use App\Officers;
use App\Town;
use App\Type;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $towns = Town::orderBy('name')->get();
    	$announcement = Announcement::first();
    	return view('index',compact('announcement','towns'));
    }

    public function documents($id=5,$type=0)
    {
        if($type == 0){
            $documents = Document::whereIsPrivate(0)->whereTownId($id)->get();    
        }
        else{
            $documents = Document::whereIsPrivate(0)    
            ->whereTownId($id)
            ->whereDocumentType($type)
            ->get();
            // dd($documents);
        }
        $town_id = $id;
        $type_id = $type;

        $towns = Town::orderBy('name')->get();
        $types = Type::orderBy('name')->get();
    	return view('documents',compact('documents','towns','types','town_id','type_id'));
    }

    public function sbmembers()
    {
        $towns = Town::orderBy('name')->get();
        $mayor = Author::wherePosition('Mayor')->first();
        $vicemayor = Author::wherePosition('Vice Mayor')->first();
        $councilors = Author::wherePosition('councilor')->get();

        return view('sbmembers',compact('mayor','vicemayor','councilors','towns'));
    }

    public function news()
    {
        $towns = Town::orderBy('name')->get();
        $news = News::orderBy('created_at','desc')->get();
        return view('news',compact('news','towns'));
    }


    public function news_details($id)
    {
        $n = News::findOrFail($id);
        $towns = Town::orderBy('name')->get();
        return view('news_details',compact('n','towns'));
    }

    public function officers()
    {
        $towns = Town::orderBy('name')->get();
        $officers = Officers::whereTown('Laguna')->orderBy('id','asc')->get();
        return view('officers',compact('officers','towns'));
    }

    public function councilors($town = 'Alaminos',$type = 'all')
    {
        $officers = Officers::whereTown($town)->orderBy('id','asc')->get();
        if($type == 'all'){
            $towns = Town::orderBy('name')->get();    
        }
        elseif($type == 'town'){
           
            $towns = Town::whereNotIn('name',['Biñan','Cabuyao','Calamba','San Pablo','San Pedro','Santa Rosa'])->get();
        }else{
           
            $towns = Town::whereIn('name',['Biñan','Cabuyao','Calamba','San Pablo','San Pedro','Santa Rosa'])->get();
        }
        
        return view('councilors',compact('officers','towns','town','type'));
    }


}
