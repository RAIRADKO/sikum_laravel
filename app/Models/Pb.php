<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pb extends Model
{
    use HasFactory;

    protected $table = 'pbs';

    protected $fillable = [
        'no_urut', 'kode_pb', 'id_opd', 'tgl_pengajuan', 'perihal', 
        'pemohon', 'tgl_terima', 'tahap1', 'ket1', 'tahap2', 'ket2',
        'catatan', 'status', 'tahun', 'no_pb'
    ];

    protected $casts = [
        'tgl_pengajuan' => 'date',
        'tgl_terima' => 'date',
        'tahap1' => 'datetime',
        'tahap2' => 'datetime',
    ];

    public function opd()
    {
        return $this->belongsTo(Opd::class, 'id_opd', 'id_opd');
    }

    public function bons()
    {
        return $this->morphMany(Bon::class, 'bonable');
    }
}