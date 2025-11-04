<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Forms extends Model
{
    protected $table = "application_forms";

    use SoftDeletes;
    
    protected $fillable = [
        'name', 'slug'
    ];
}
