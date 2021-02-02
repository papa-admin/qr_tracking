<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bisitor extends Model
{
    use HasFactory;

    protected $fillable = [
        'lname',
        'fname',
        'mname',
        'num-h',
        'st',
        'brgy',
        'city',
        'p-num',
        'email'
    ];
}
