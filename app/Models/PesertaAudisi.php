<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PesertaAudisi extends Model
{
    /** @use HasFactory<\Database\Factories\PesertaAudisiFactory> */
    use HasFactory;
    protected $fillable = [
        'kategori_audisi_id',
        'nama_peserta',
        'umur',
        'jenis_kelamin',
        'alamat',
        'nomor_hp',
        'bakat'
    ];

    public function pesertaAudisis()
    {
        return $this->hasMany(PesertaAudisi::class);
    }
}
