<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HasilStatusGizi extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'tanggal',
        'usia_bulan',
        'tinggi',
        'berat_badan',
        'status_gizi',
    ];

    // Relasi dengan user (pengguna terdaftar)
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
