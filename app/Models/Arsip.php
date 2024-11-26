<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Arsip extends Model
{
    use HasFactory;

    protected $table = 'arsips';
    protected $primaryKey = 'id_arsip';
    protected $fillable = [
        'nomor_surat',
        'judul',
        'waktu_arsip',
        'id_kategori',
        'file'
    ];

    public function kategoris(): BelongsTo
    {
        return $this->belongsTo(Kategori::class, 'id_kategori', 'id_kategori');
    }
}
