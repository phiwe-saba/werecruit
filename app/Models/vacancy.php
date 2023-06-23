<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vacancy extends Model
{
    use HasFactory;

    protected $fillable = [
        'job_title',
        'job_field',
        'location',
        'job_type',
        'description'
    ];
}
