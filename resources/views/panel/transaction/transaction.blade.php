@extends('master.master_admin')
@section('content')
<main>
    <div class="content-wrapper">
        <div class="container mt-4">
            <div class="row justify-content-center mb-6">
                <div class="col-8">
                    <h2 class="text-center fw-bold">Transaksi Produk</h2>
                    <button type="button" class="btn btn-primary mb-3" id="tambahButton1">
                        <i class="fa fa-plus-circle"></i>
                    </button>

                    <table class="table">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Harga</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Harga Total</th>
                                <th scope="col">Batalkan</th>
                            </tr>
                        </thead>
                        <tbody id="dataPelanggan1">
                            <!-- Data tambahan-->
                        </tbody>
                    </table>
                    <table>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Customer ID</th>
                                <th>Stock ID</th>
                                <th>Timestamps</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($transaction as $trx)
                                <tr>
                                    <td>{{ $trx->trc_id }}</td>
                                    <td>{{ $trx->customer_id }}</td>
                                    <td>{{ $trx->stock_id }}</td>
                                    <td>{{ $trx->created_at }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>

<!-- Modal transaksi -->
<div class="modal fade" id="transaksiModal" tabindex="-1" role="dialog" aria-labelledby="tambahModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambahModalLabel">Tambah
                    Data Pelanggan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="formBeli" method="post" action="{{route('create-transaction')}}">
                    <div class="form-group">
                        <label for="inputNama">Pilih Produk</label>
                        <select class="form-control seleksi" id="inputNama">
                            @foreach($stocks as $stock)
                            <option value="{{$stock->harga_jual}}" meta-ku="a">{{$stock->nama_barang}}</option>
                            @endforeach

                        </select>
                    </div>
                    <div class="form-group">
                        <label for="inputAlamat">Harga</label>
                        <input type="text" class="form-control" id="hargabarang" disabled>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail">Quantity</label>
                        <input type="number" class="form-control" id="nilai" required min="0" step="1">
                    </div>
                    <div class="form-group">
                        <p class="mt-4" id="hasiljumlah">Total Rp. </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" id="closeModal" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary" id="tambahConfirm">Buy</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection