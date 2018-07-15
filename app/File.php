<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{

    public $timestamps = false;


    public function contact(){

        return $this->hasMany(Contact::class);

    }
}
