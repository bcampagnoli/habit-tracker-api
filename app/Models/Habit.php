<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Traits\HasUuid;

class Habit extends Model
{
    /** @use HasFactory<\Database\Factories\HabitFactory> */
    use HasFactory;
    use HasUuid;


    public function logs(): HasMany
    {
        return $this->hasMany(HabitLog::class)
            ->shaperone('habit');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
