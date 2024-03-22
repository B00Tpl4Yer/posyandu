<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    use HasFactory;

    protected $fillable = ['pesan', 'user_id'];

    protected $casts = [
        'dibaca' => 'boolean', // Kolom 'dibaca' akan di-cast sebagai boolean
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
