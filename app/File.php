<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    protected $fillable = ['file_id', 'message_id'];

    public function messages(){
        $this->belongsToMany(Message::class);
    }
}
