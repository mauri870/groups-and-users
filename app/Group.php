<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Group extends Model
{
   protected $fillable = [
       'name',
   ];

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
