<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Applications extends Model
{
    use HasFactory;

    protected $table = 'applications';

    protected $fillable = [
        'cv',
        'user_id',
        'job_id',
        'job_image',
        'job_title',
        'job_type',
        'job_region',
        'company',
    ];
}
