<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Aktifitas extends Model
{
    use HasFactory;
    protected $table = "aktifitas";
    protected $fillable = ['nama_aktifitas','deskripsi','tanggal','status'];
}
