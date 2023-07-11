<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'surname', 'email', 'upload_resume'];

    //Relationship with vacancies
    public function vacancy()
    {
        return $this->belongsTo(Vacancy::class);
    }
}
