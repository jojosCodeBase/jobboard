<?php

namespace App\Models\Job;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $tabe = 'jobs';
    // protected $fillable = [
    //     'id',
    //     'job_title',
    //     'job_region',
    //     'company',
    //     'job_type',
    //     'vacancy',
    //     'experience',
    //     'salary',
    //     'gender',
    //     'application_deadline',
    //     'jobdescription',
    //     'responsibilities',
    //     'education_experience',
    //     'otherbenifits',
    //     'image',
    //     'category',
    // ];

    public $timestamp = false;
}
