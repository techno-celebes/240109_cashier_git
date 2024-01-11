<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post" action = "{{route('create-customer')}}">
    {{ @csrf_field()}}
    <label>nama</label>
    <input type="text" name ="tusa">

    <label>alamat</label>
    <input type="text" name ="kuda">
    
    <button type="submit">tambah</button>
</form>
     @foreach($customer as $p)
        <p>{{ $p->nama }}</p>
        <p>{{ $p->alamat }}</p>
        <hr>
    @endforeach

    {{$customer->links()}}
    
</body>
</html>