<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Model;

class UserDocuments extends Model
{
    protected $table = "user_documents";
    
    protected $fillable = [
        'user_application_id', 
        'user_id',
        'upload_doc',
        'images',
        'status'
    ];
    
}
