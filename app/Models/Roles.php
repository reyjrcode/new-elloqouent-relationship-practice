<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Roles extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    protected $hidden = [

        'created_at',
        'updated_at','pivot'
    ];


    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class);
    }
}
