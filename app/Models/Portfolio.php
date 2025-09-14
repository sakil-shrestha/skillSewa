<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Portfolio extends Model
{
    protected $fillable = [
        "link",
        "resume",
        "professional_id"
    ];

    public function professional(): BelongsTo
    {
        return $this->belongsTo(Professional::class);
    }
}
