<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BitacoraMessageFb extends Model
{
    protected $table='bitacora_messagefb';
    protected $fillable=[
        'type',
        'typeMessage',
        'number',
        'report',
        'message',
        'error',
        'status'
    ];
}