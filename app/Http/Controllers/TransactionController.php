<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Transaction as TransactionModel;
use App\Model\Stock as StockModel;

class TransactionController extends Controller
{
    public function transaction()
    {
        $transaksi = TransactionModel::all();
        $stocks = StockModel::all();
        return view('panel.transaction.transaction', ['transaction' => $transaksi,'stocks'=>$stocks]);
    }
    // public function delete_transaction(Request $request){
    //     $data = array();
        
    //     try {
    //         $transaction = $request->stock_id;

    //         if(strlen($stock_id) == 0){
    //             $stock_id = 0;
    //         }
    //         $data['trc_id'] = $transaction;
    //     } catch(\Exception $e){
    //         $transaction = 0;
    //     }

    //     $rules = [
    //         'trc_id' => 'exists:transaction, transaction'
    //     ];
        
    //     $validator = Validator::make($data, $rules);
    //     if(!$validator->passes()){
    //         $data['error'] = $validator->messages();
    //         return $data;
    //     }
    //     try{
    //         $record = TransactionModel::find($transaction);
    //         $record->delete();
    //     } catch(Exception $exception){
    //         $data['error'] = array('data ini tidak bisa dihapus');
    //         return $data;
    //     }
    

}
