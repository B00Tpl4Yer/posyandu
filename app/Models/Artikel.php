<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    use HasFactory;
    protected $fillable = ['judul','penulis', 'tanggal_posting', 'konten', 'user_id', 'foto', 'public'];

    // Relasi dengan user (admin)
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
