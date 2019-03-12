<?php

namespace OrlandoLibardi\ContactCms\app;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'phone', 'subject', 'message', 'ip'
    ];
}
