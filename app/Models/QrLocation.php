<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QrLocation extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_lokasi',
        'kode_lokasi',
        'deskripsi',
        'aktif',
    ];

    public function qrTokens()
    {
        return $this->hasMany(QrToken::class, 'qr_location_id');
    }
}