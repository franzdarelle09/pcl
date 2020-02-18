<?php

namespace App;

use App\Author;
use App\Document;
use Illuminate\Database\Eloquent\Model;

class Documentauthor extends Model
{
	public $timestamps = false;
	protected $table = 'author_document';
    public function document(){
    	return $this->belongsTo(Document::class);
    }

    public function author(){
    	return $this->belongsTo(Author::class);
    }
}
