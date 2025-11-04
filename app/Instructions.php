<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Model;

class Instructions extends Model
{
    protected $table = "instructions";
    
    protected $fillable = [
       'title', 'upload_file',
    ];
    
   
}
