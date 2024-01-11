<?php
namespace App\Model;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model {
    protected $table = "transactions";
    protected $primaryKey = "trc_id";
    
    protected $fillable = [
        'customer_id','stock_id','created_at','updated_at'
    
    ];


}