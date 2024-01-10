<?php
namespace App\model;
use Illuminate\Database\Eloquent\model;

class Transaction extends model {
    protected $table = "transaction";
    protected $primaryKey = "trc_id";
    
    protected $fillable = [
        'customer_id','stock_id','created_at','updated_at'
    
    ];


}