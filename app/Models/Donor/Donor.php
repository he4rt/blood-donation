<?php

namespace App\Models\Donor;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donor extends Model
{
    use HasFactory;

    protected $table = 'donors';

    protected $fillable = [
        'status_id',
        'name',
        'email',
        'full_address',
        'job_title',
        'social_type',
        'social_url'
    ];
}
