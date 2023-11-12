<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class VideoRate extends Model
{
    use HasFactory;
    protected $fillable = [
        'rating',
        'user_id',
        'video',
    ];
    public function user(): BelongsTo{
        return $this->belongsTo(User::class);
    }
    public function video(): BelongsTo{
        return $this->belongsTo(Video::class);
    }
    
}
