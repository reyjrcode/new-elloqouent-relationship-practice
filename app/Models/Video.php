<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Video extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'user_id',
    ];
    public function user(): BelongsTo{
        return $this->belongsTo(User::class);
    }
    public function feedback(): HasMany{
        return $this->hasMany(Feedback::class);
    }
    public function video_rates(): HasMany{
        return $this->hasMany(VideoRate::class);
    }
}
