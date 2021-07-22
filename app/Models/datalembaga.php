<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class datalembaga extends Model
{
    protected $primaryKey='kode_lembaga';
    protected $fillable =['nama_lembaga', 'nama_direktur', 'alamat', 'telpon', 'kode_lembaga'];
    use HasFactory;
}
