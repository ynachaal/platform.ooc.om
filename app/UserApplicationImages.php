<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Model;

class UserApplicationImages extends Model
{
    protected $table = "user_application_image";
    
    protected $fillable = [
        'user_application_id', 
        'user_id',
        'upload_doc',
        'images',
        
    ];
    
}
