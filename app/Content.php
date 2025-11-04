<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    protected $table = "content";
    
    protected $fillable = [
        'title', 'description'
    ];
}
