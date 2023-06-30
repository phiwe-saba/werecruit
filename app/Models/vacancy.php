<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vacancy extends Model
{
    use HasFactory;

    protected $fillable = ['job_title', 'job_field', 'location', 'job_type', 'description'];

    //Relationship to applicant
    public function applicant()
    {
        return $this->belongsTo(Applicant::class, 'applicant_id');
    }
}
