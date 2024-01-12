<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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