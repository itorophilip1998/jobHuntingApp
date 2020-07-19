<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Job;

class JobMails extends Model
{
    protected $fillable =['full_name', 'email', 'subject', 'content', 'attachment', 'to'];

    public function user(){
        $this->belongsTo(User::class);
    }

    public function job(){
        $this->belongsTo(Job::class);
    }
}
