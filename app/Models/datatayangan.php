<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class datatayangan extends Model
{
    protected $primaryKey='kode_tayangan';
    protected $fillable =['kode_tayangan', 'nama_tayangan', 'rating', 'kode_jadwal', 'id_talent', 'kode_lembaga'];
    

    public function datajadwal(){
        return $this->belongsTo('App\Models\jadwal','kode_jadwal')->withDefault([
            'kode_jadwal'=>'tidak ada'
        ]);    
    }

    public function datatalent(){
        return $this->belongsTo('App\Models\datatalent','id_talent');    
    }

    public function datalembaga(){
        return $this->belongsTo('App\Models\datalembaga','kode_lembaga');    
    }
}
