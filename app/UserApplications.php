<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Model;

class UserApplications extends Model
{
    protected $table = "user_applications";
    
    protected $fillable = [
        'application_id', 
        'user_id',
        'data',
        'status',
        'feedback',
        'remark',
        'doc_remark',
        'certificate_of_approval',
        'down_payment',
        'approved_budget',
        'attachments'
    ];
    
    public function user()
    {
        return $this->belongsTo('App\User','user_id');
    }
    public function application()
    {
        return $this->belongsTo('App\Application','application_id');
    }
    
}
