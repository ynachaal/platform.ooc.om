<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Model;

class Programs extends Model
{
    protected $table = "applications";
    
    protected $fillable = [
        'title', 'parent_id','form_id', 'image', 'tech_report', 'certificated_approval'
    ];
    
    public function childPrograms()
    {
        return $this->hasMany('App\Programs','parent_id');
    }
    
    public function parentProgram()
    {
        return $this->belongsTo('App\Programs','parent_id');
    }
    
    public function form_application()
    {
        return $this->belongsTo('App\Forms','form_id');
    }

    public function category()
    {
        return $this->belongsTo('App\ApplicationCategory','application_category_id');
    }
}
