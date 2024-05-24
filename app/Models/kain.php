<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kain extends Model
{
    use HasFactory;
    protected $table = 'tb_kain';
    protected $primaryKey = 'id_kain';
    protected $guarded = ['id_kain'];
}
