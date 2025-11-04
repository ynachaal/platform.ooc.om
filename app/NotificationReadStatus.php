<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Model;

class NotificationReadStatus extends Model
{
    protected $table = "notification_read_status";
    
    protected $fillable = [
       'notification_id', 'viewer_id',
    ];
}
