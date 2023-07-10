<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TableData extends Model
{
    use HasFactory;
    protected $table = 'table_data';

    protected $primaryKey = 'id';
    protected $fillable = ['nama',
    'fungsi', 'harga', 'size'];

}
