<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Model;

class ApplicationCategory extends Model
{
    protected $table = "application_category";
    
    protected $fillable = [
        'name'
    ];
}
