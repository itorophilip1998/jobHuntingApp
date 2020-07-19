<?php

namespace App;
use App\JobMails;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    public function user(){
        $this->belongsTo(User::class);
    }

    public function jobmails(){
        $this->HasMany(JobMails::class);
    }
}
