<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Education extends Model
{
    protected $casts = [
        "skills" => "array",
    ];

    protected $fillable = [
        "faculty",
        "level",
        "years_of_experience",
        "skills",
        "professional_id"
    ];
    public function professional(): BelongsTo
    {
        return $this->belongsTo(Professional::class);
    }
}
