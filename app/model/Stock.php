<?php
namespace App\model;
use Illuminate\Database\Eloquent\model;

class Stock extends model {
    protected $table = "stocks";
    protected $primaryKey = "stock_id";
    
    protected $fillable = [
        'nama_barang', 'harga_beli', 'harga_jual', 'created_at','updated_at'
    ];
}