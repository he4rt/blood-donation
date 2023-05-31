<?php

namespace App\Models\Donor;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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

    public function status(): BelongsTo
    {
        return $this->belongsTo(Status::class);
    }
}
