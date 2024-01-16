<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cuti extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_karyawan',
        'tanggal_mulai',
        'tanggal_berakhir',
        'alasan',
    ];

    public function getTanggalMulaiStringAttribute()
    {
        return $this->tanggal_mulai->format('d-m-Y');
    }

    public function getTanggalBerakhirStringAttribute()
    {
        return $this->tanggal_berakhir->format('d-m-Y');
    }
}
