<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vacancy extends Model
{
    use HasFactory;

    protected $fillable = ['job_title', 'job_field', 'location', 'job_type', 'description'];

    //Relationship to application
    public function applications()
    {
        return $this->hasMany(Application::class);
    }
}
