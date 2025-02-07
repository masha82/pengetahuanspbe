<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TataKelola extends Model
{

    use HasFactory;

    protected $table = 'tatakelola';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['domain', 'aspek', 'no_indikator', 'nama_indikator','deskripsi'];

}
