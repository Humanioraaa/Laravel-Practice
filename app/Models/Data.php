<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    use HasFactory;
    protected $table = 'datas';

    protected $primaryKey = 'id';
    protected $fillable = ['nama',
    'fungsi', 'harga', 'size', 'img', 'id_users'];
}
