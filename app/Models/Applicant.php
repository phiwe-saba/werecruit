<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Applicant extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'surname', 'email', 'upload_resume'];

    //Relationship with vacancies
    public function vacancies()
    {
        return $this->belongsToMany(Vacancy::class, 'applicant_id');
    }
}
