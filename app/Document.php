<?php

namespace App;

use App\Author;
use App\Documentauthor;
use App\Type;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    public function documentauthors()
    {
    	return $this->hasMany(Documentauthor::class);
    }

    public function authors()
    {
    	return $this->belongsToMany(Author::class);
    }

    public function type()
    {
    	return $this->hasOne(Type::class, 'id', 'document_type');
    }
}
