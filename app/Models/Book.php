<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Book extends Model
{
    use HasFactory;
    use SoftDeletes;

    
    protected $fillable = ['title','description','price','avaiable'];

    public function store(){
        return $this->belongsTo('App\Models\Store');
    }

    public function authors(){
        return $this->belongsToMany('App\Models\Author');
    }
}
