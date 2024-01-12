<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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
    
</body>
</html>