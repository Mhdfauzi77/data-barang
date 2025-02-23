@extends('layouts.app')

@section('content')

<head>
    <style>
        .container {
    margin-top: 20px;
}

.card {
    border-radius: 10px;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
}

.card-header {
    background-color: #28a745;
    color: white;
    font-size: 18px;
    font-weight: bold;
    padding: 15px;
    border-radius: 10px 10px 0 0;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.card-header .btn-secondary {
    background-color: white;
    color: #6c757d;
    border: 2px solid white;
    transition: 0.3s;
}

.card-header .btn-secondary:hover {
    background-color: #6c757d;
    color: white;
}

.table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 15px;
}

.table th, .table td {
    padding: 12px;
    border-bottom: 1px solid #ddd;
}

.table th {
    background-color: #28a745;
    color: white;
    text-align: left;
    width: 30%;
}

.table tr:nth-child(even) {
    background-color: #f8f9fa;
}

.table tr:hover {
    background-color: #e9ecef;
    transition: 0.2s;
}

    </style>
</head>
<div class="container">
    <div class="card">
        <div class="card-header">
            <h1>Detail Penjualan</h1>
            <a href="{{ route('penjualan.index') }}" class="btn btn-secondary">Kembali</a>
        </div>
        <div class="card-body">
            <table class="table">
                <tr>
                    <th>ID Penjualan</th>
                    <td>{{ $penjualan->id }}</td>
                </tr>
                <tr>
                    <th>Nama Barang</th>
                    <td>{{ $penjualan->barang->nama_barang }}</td>
                </tr>
                <tr>
                    <th>Tanggal Transaksi</th>
                    <td>{{ $penjualan->created_at->format('Y-m-d') }}</td>
                </tr>
                <tr>
                    <th>Jumlah</th>
                    <td>{{ $penjualan->jumlah }}</td>
                </tr>
                <tr>
                    <th>Harga Satuan</th>
                    <td>{{ number_format($penjualan->barang->harga, 0, ',', '.') }}</td>
                </tr>
                <tr>
                    <th>Total Harga</th>
                    <td>{{ number_format($penjualan->jumlah * $penjualan->barang->harga, 0, ',', '.') }}</td>
                </tr>
                <tr>
                    <th>Nama Kasir</th>
                    <td>{{ optional($penjualan->user)->name ?? 'Tidak Diketahui' }}</td>
                </tr>
            </table>
        </div>
    </div>
</div>
@endsection