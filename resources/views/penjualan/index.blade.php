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
}

.card-header .btn-success {
    background-color: white;
    color: #28a745;
    border: 2px solid white;
    transition: 0.3s;
}

.card-header .btn-success:hover {
    background-color: #218838;
    color: white;
    border-color: #218838;
}

.table {
    margin-top: 10px;
    border-radius: 10px;
    overflow: hidden;
}

.table thead {
    background-color: #28a745;
    color: white;
    font-size: 16px;
}

.table th, .table td {
    padding: 12px;
    text-align: center;
    vertical-align: middle;
}

.table tbody tr:hover {
    background-color: #f8f9fa;
    transition: 0.2s;
}

.text-decoration-none {
    color: #007bff;
    font-weight: bold;
}

.text-decoration-none:hover {
    color: #0056b3;
    text-decoration: underline;
}

.pagination {
    justify-content: center;
}

.pagination .page-item .page-link {
    color: #28a745;
    border-radius: 5px;
}

.pagination .page-item.active .page-link {
    background-color: #28a745;
    border-color: #28a745;
    color: white;
}

    </style>
</head>

<div class="container">
    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h1>Penjualan</h1>
                <a href="{{ route('penjualan.create') }}" class="btn btn-success">Tambah Data Penjualan</a>
            </div>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Barang</th>
                        <th>Tanggal Transaksi</th>
                        <th>Waktu Transaksi</th>
                        <th>Jumlah</th>
                        <th>Harga</th>
                        <th>Total Harga</th>
                        <th>Nama Kasir</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($penjualans as $penjualan)
                    <tr>
                        <td>{{ $penjualan->id }}</td>
                        <td>
                            <a href="{{ route('penjualan.show', $penjualan->id) }}" class="text-decoration-none">
                            {{ $penjualan->barang->nama_barang }}
                            </a>
                        </td>
                        <td>{{ $penjualan->created_at }}</td>
                        <td>{{ $penjualan->created_at->diffForHumans() }}</td>
                        <td>{{ $penjualan->jumlah }}</td>
                        <td>{{ $penjualan->barang->harga }}</td>
                        <td>{{ $penjualan->jumlah * $penjualan->barang->harga }}</td>
                        <td>{{ $penjualan->user->name }}</td>
                    </tr>
                    @endforeach
                    <tr>
                    <td colspan="7" class="text-center">
                        {{ $penjualans->links('pagination::bootstrap-4') }}
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection