<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Customers as CustomerModel;

class CustomerController extends Controller
{
    public function Customers(){
        $Customers = CustomerModel::paginate(2);
        return view('create',['customer'=>$Customers]);
    }
    public function create_customer(Request $request){
        $nama = $request->tusa;
        $alamat = $request->kuda;

        $k = new CustomerModel();
        $k->nama = $nama;
        $k->alamat = $alamat;
        $k->save();
        return redirect()->route('create-customer-get');
    }


}
