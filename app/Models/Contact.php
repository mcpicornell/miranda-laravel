<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = 'contacts';
    protected $primaryKey = 'contactId';
    public $timestamps = false;

    protected $fillable = [
        'date',
        'customerName',
        'customerPhoneNumber',
        'customerEmail',
        'subject',
        'comment',
        'isArchive',
    ];
}