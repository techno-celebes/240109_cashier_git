@extends('master.master_admin')
@section('content')
<main>
    <div class="content-wrapper">
        <div class="container mt-4">
            <div class="row justify-content-center mb-6">
                <div class="col-8">
                    <h2 class="text-center fw-bold">Transaksi Produk</h2>

					<form method="post" action = "{{route('create-stock')}}">
					    {{ @csrf_field()}}
					    <label>nama barang</label>
					    <input type="text" name ="namabarang">

					    <label>harga jual</label>
					    <input type="text" name ="hargajual">
					    
					    <label>harga beli</label>
					    <input type="text" name ="hargabeli">
					    <button type="submit">tambah</button>
					</form>

					@foreach($stock as $s)
					 <h1>nama barang : {{ $s->nama_barang }}</h1>
					 <h1>harga beli: {{ $s->harga_beli}}</h1>
					 <h1>harga jual: {{ $s->harga_jual}}</h1>
					@endforeach
					{{ $stock->links() }}
                </div>
            </div>
        </div>
    </div>
</main>


@endsection