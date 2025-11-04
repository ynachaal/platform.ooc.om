<?php

namespace App;

use App\NotificationReadStatus;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Model;

class Notifications extends Model
{
    protected $table = "notifications";
    
    protected $fillable = [
       'user_id', 'target_id', 'notification_text', 'type',
    ];
	
	
	 public function NotificationReadStatus()
    {
		 return $this->hasMany('App\NotificationReadStatus','notification_id');

    }
}
