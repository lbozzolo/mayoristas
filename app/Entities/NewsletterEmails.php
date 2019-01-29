<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class NewsletterEmails extends Model
{
    protected $table = 'newsletter_emails';
    protected $fillable = ['email'];
    //public $timestamps = false;

}
