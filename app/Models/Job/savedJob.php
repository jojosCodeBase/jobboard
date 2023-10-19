<?php

namespace App\Models\Job;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class savedJob extends Model
{
    use HasFactory;
    protected $table = 'saved_job';
    protected $fillable = [
        'id',
        'user_id',
        'job_id',
        'job_title',
        'job_type',
    ];
}
