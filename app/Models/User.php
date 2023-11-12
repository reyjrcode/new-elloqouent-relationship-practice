<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'address',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
        'created_at', 'updated_at'
    ];

 
    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function profile(): HasOne
    {
        return $this->hasOne(Profile::class);
    }

    public function roles():BelongsToMany
    {
        return $this->BelongsToMany(Roles::class);
    }

    public function posts():HasMany
    {
        return $this->hasMany(Post::class);
    }

    public function comments():HasMany
    {
        return $this->hasMany(Comments::class);
    }

    public function rates():HasMany
    {
        return $this->hasMany(Rate::class);
    }

    public function video():HasMany{
        return $this->hasMany(Video::class);
    }
    public function feedback():HasMany{
    return $this->hasMany(Feedback::class);
    }
    public function videorate():HasMany{
        return $this->hasMany(VideoRate::class);
    }
}
