<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stok extends Model
{
    use HasFactory;
    protected $table = 'tb_stok';
    protected $primaryKey = 'id_stok';
    protected $guarded = ['id_stok'];

    public function kain(){
        return $this->belongsTo(Kain::class,'id_kain');
    }
    public function pemasok(){
        return $this->belongsTo(Pemasok::class,'id_pemasok');
    }
}
