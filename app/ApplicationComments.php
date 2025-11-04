<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Model;

class ApplicationComments extends Model
{
    protected $table = "application_comments";
    
    protected $fillable = [
        'user_id',
        'application_id',
        'comment',
    ];
	
	 public function user()
    {
        return $this->belongsTo('App\User','user_id','id');
    }
}
