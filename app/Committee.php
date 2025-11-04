<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Model;

class Committee extends Model
{
    protected $table = "committee";
    
    protected $fillable = [
        'committee_name', 'committee_logo',
    ];
    
    public static function getCommitteeName($committee_id){
        $data = self::select('committee_name')->where('id',$committee_id)->first();
        return $data->committee_name;
    }
}
