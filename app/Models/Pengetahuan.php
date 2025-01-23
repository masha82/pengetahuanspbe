<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengetahuan extends Model
{
    protected $table = 'pengetahuan';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['nomor', 'nama', 'status'];
}
