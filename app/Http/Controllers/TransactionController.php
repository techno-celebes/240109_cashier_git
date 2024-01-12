<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Transaction as TransactionModel;

class TransactionController extends Controller
{
    public function transaction()
    {
        $transaksi = TransactionModel::all();
        return view('panel.transaction.transaction', ['transaction' => $transaksi]);
    }

}
