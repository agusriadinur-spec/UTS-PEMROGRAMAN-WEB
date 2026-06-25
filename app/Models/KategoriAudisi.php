<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriAudisi extends Model
{
    /** @use HasFactory<\Database\Factories\KategoriAudisiFactory> */
    use HasFactory;
    protected $fillable = [
        'nama_kategori',
        'deskripsi',
        'lokasi_audisi'
    ];


    public function kategoriAudisi()
    {
        return $this->belongsTo(KategoriAudisi::class);
    }
}
