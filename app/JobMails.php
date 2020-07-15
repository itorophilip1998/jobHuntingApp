<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobMails extends Model
{
    protected $fillable =['full_name', 'email', 'subject', 'content', 'attachment', 'to'];

    public function user(){
        $this->belongsTo(User::class);
    }
}
