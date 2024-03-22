<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HasilBeratBadan extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'berat_badan',
        'tinggi',
        'tanggal',
        'hasil',
        // Tambahkan kolom lain sesuai kebutuhan
    ];


    // Relasi dengan user (pengguna terdaftar)
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
