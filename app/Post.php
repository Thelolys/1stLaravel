<?php

namespace App;

use function foo\func;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //Table name ||nav obligati||
    protected $table='posts';
    //Nomainit primary key nosaukumu
    public $primaryKey ='id';
    //Timestamps
    public $timestamps = true;

    public function user(){
        return $this->belongsTo('App\User');

    }
}

