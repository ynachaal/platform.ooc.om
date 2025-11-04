<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = "news";
    
    protected $fillable = [
        'title', 'description','image',
    ];
}
