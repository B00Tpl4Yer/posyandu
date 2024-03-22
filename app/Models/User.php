<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;
use Spatie\Permission\Traits\HasPermissions;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory,HasRoles,HasPermissions, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
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

        // Relasi dengan hasil status gizi
        public function hasilStatusGizi()
        {
            return $this->hasMany(HasilStatusGizi::class);
        }

        // Relasi dengan hasil berat badan
        public function hasilBeratBadan()
        {
            return $this->hasMany(HasilBeratBadan::class);
        }

        // Relasi dengan artikel
        public function artikel()
        {
            return $this->hasMany(Artikel::class);
        }

        // Relasi dengan resep
        public function resep()
        {
            return $this->hasMany(Resep::class);
        }

        // Relasi dengan feedback
        public function feedback()
        {
            return $this->hasMany(Feedback::class);
        }

        public function videopembelajarananak()
        {
            return $this->hasMany(videopembelajarananak::class);
        }
}
