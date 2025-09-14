<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class JobInfo extends Model
{
    protected $fillable = [
        "job_title",
        "hourly_rate",
        "description",
        "professional_id"
    ];
    public function professional(): BelongsTo
    {
        return $this->belongsTo(Professional::class);
    }
}
