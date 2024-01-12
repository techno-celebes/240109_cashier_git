<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Stock as StockModel;


class StockController extends Controller
{
    public function stock(){
        $stock = StockModel::paginate(1);
        return view('panel.stock.create', ['stock' => $stock]);
    }
    public function create_stock(Request $request){
        $nama_barang = $request->namabarang;
        $harga_jual = $request->hargajual;
        $harga_beli = $request->hargabeli;

        $k = new StockModel();
        $k->nama_barang = $nama_barang;
        $k->harga_beli = $harga_beli;
        $k->harga_jual = $harga_jual;
        $k->save();
        return redirect()->route('create-stock-get');
    }
    public function delete_stock(Request $request){
        $data = array();
        
        try {
            $stock_id = $request->stock_id;

            if(strlen($stock_id) == 0){
                $stock_id = 0;
            }
            $data['stock_id'] = $stock_id;
        } catch(\Exception $e){
            $stock_id = 0;
        }

        $rules = [
            'stock_id' => 'exists:stock, stock_id'
        ];
        
        $validator = Validator::make($data, $rules);
        if(!$validator->passes()){
            $data['error'] = $validator->messages();
            return $data;
        }
        try{
            $record = StockModel::find($stock_id);
            $record->delete();
        } catch(Exception $exception){
            $data['error'] = array('data ini tidak bisa dihapus');
            return $data;
        }
    }
}
