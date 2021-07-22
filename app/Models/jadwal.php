<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class jadwal extends Model
{
    protected $primaryKey='kode_jadwal';
    protected $fillable =['kode_jadwal', 'hari', 'jam', 'nama_karyawan', 'nama_talent'];
    
    public function datakaryawan(){
        return $this->belongsTo('App\Models\datakaryawan','nama_karyawan')->withDefault([
            'nama_karyawan'=>'tidak ada'
        ]);    
    }

    public function datatalent(){
        return $this->belongsTo('App\Models\datatalent','nama_talent');    
    }

    
}
