<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resep extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'namaobat',
        'pemberi',
        'tanggalpemberian',
        'dosis',
        'keterangan',
    ];

    // Di dalam model Resep
public function scopeForUser($query, $userId)
{
    return $query->where('user_id', $userId);
}

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
