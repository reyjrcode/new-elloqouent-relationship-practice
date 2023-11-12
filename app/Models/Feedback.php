<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Feedback extends Model
{
    use HasFactory;
    protected $fillable = [
        'content',
        'user_id',
        'video_id'
    ];
    public function user(): BelongsTo{
        return $this->belongsTo(User::class);
    }

    public function video(): HasMany{
        return $this->hasMany(Video::class);
    }

}
