<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Galery extends Model
{
    use HasFactory;

    protected $table = 'galery'; // Menentukan nama tabel yang benar

    protected $fillable = [
        'kategori_id',
        'judul',
        'deskripsi',
    ];

    public $timestamps = false; 

    // Relasi ke model Kategori
    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'kategori_id', 'id');
    }

    // Relasi ke model Photo
    public function photos()
    {
        return $this->hasMany(Photo::class, 'kategori_id', 'id');
    }
}