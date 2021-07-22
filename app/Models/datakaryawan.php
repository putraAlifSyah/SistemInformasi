<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class datakaryawan extends Model
{
    protected $primaryKey = 'id_karyawan';
    protected $fillable =['nama_karyawan', 'jabatan', 'no_telpon', 'alamat', 'jam_kerja', 'gaji_pokok', 'kode_lembaga'];
    
    public function datalembaga(){
        return $this->belongsTo('App\Models\datalembaga','kode_lembaga')->withDefault([
            'kode_lembaga'=>'tidak ada'
        ]);    
    }

    // public function datakaryawanfungsi() { 
    //     return $this->hasOne('App\Models\jadwal'); 
    // }
}
