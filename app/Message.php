<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = [
        'firstname', 'lastname', 'email', 'projet_name', 'fileone', 'filetwo', 'message'
    ];

}
