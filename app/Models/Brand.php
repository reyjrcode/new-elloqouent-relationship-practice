<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Brand extends Model
{
    use HasFactory;
    protected $fillable = ['name','country_id'];

    public function country():BelongsTo{
        return $this->belongsTo(Country::class);
    }
    public function products():HasMany{
        return $this->hasMany(Product::class);
    }
}
