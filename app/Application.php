<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    protected $table = "applications";
    
    protected $fillable = [
        'parent_id',
        'form_id',
        'title',
        
    ];
    public function application_form()
    {
        return $this->belongsTo('App\Forms','form_id');
    }
}
