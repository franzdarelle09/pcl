<?php

namespace App\Http\Controllers;

use App\Announcement;
use Illuminate\Http\Request;

class AnnouncementController extends Controller
{
    public function index()
    {
    	$announcement = Announcement::first();
    	return view('admin.announcement',compact('announcement'));
    }

    public function store(Request $request)
    {
    	$a = Announcement::find($request->input('announcement_id'));
    	$a->message = $request->input('message');
    	$a->status = $request->input('status');
    	
    	if($a->save()){
    		return redirect('admin/announcement');
    	}

    }
}
