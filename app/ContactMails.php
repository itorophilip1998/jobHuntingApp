<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactMails extends Model
{
    protected $fillable =['full_name', 'email', 'subject', 'content'];
}
