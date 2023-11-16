<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['name','brand_id'];
    public function brand():BelongsTo{
        return $this->belongsTo(Brand::class);
    }
    public function owners(): BelongsToMany
    {
        return $this->belongsToMany(Owner::class, 'product_owners');
    }
}
