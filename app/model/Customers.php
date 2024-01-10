<?php
namespace App\model;
use Illuminate\Database\Eloquent\model;

class Customers extends model {
    protected $table = "customers";
    protected $primaryKey = "customer_id";
    
    protected $fillable = [
        'nama', 'alamat', 'created_at','updated_at'
    ];
}