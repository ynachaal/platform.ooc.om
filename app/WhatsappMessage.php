<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WhatsappMessage extends Model
{
    protected $table = 'whatsapp_messages'; // Table name

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'recipient_phone_number',
        'name',           // added
        'email',          // added
        'template',
        'parameters',
        'message_body',
        'status',
    ];

    /**
     * Cast attributes
     */
    protected $casts = [
        'parameters' => 'array', // automatically converts JSON <-> array
    ];
}
