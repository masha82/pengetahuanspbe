<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Regulasi extends Model
{
    protected $table = 'regulasi';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = ['jenis_regulasi', 'nama_regulasi', 'tahun', 'dokumen'];

}
