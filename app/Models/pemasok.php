<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemasok extends Model
{
    use HasFactory;
    protected $table = 'tb_pemasok';
    protected $primaryKey = 'id_pemasok';
    protected $guarded = ['id_pemasok'];
}
