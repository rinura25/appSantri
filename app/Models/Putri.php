<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Putri extends Model
{
    protected $table = "putri";
    protected $fillable = ["nama_santri","nama_orang_tua","ttl","alamat","tahun_ajaran"];
}