<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class datatalent extends Model
{
    protected $primaryKey='id_talent';
    protected $fillable =['nama_talent', 'nama_manager', 'no_telpon_manager'];
    use HasFactory;
}
