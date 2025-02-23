@extends('layouts.app')

@section('content')

<head>
    <style>
        .container {
    margin-top: 20px;
    display: flex;
    justify-content: center;
}

.card {
    width: 80%;
    border-radius: 10px;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
    background-color: #fff;
}

.card-header {
    background-color:rgb(9, 243, 1);
    color: white;
    font-size: 20px;
    font-weight: bold;
    padding: 15px;
    border-radius: 10px 10px 0 0;
    text-align: center;
}

.table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 10px;
}

.table th, .table td {
    padding: 12px;
    text-align: center;
    border: 1px solid #dee2e6;
}

.table thead {
    background-color:rgb(236, 91, 7);
    color: white;
}

.table tbody tr:hover {
    background-color: #f1f1f1;
}

.btn {
    padding: 8px 12px;
    border-radius: 5px;
    font-size: 14px;
    transition: 0.3s;
}

.btn-success {
    background-color:rgb(22, 24, 24);
    border: none;
}

.btn-success:hover {
    background-color:rgb(21, 22, 22);
}

.btn-warning {
    background-color: #ffc107;
    border: none;
}

.btn-warning:hover {
    background-color: #e0a800;
}

.btn-danger {
    background-color: #dc3545;
    border: none;
}

.btn-danger:hover {
    background-color: #c82333;
}

@media (max-width: 768px) {
    .card {
        width: 100%;
    }
    .table th, .table td {
        padding: 8px;
        font-size: 12px;
    }
}

    </style>
</head>
<div class="container">
    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h1>Daftar Barang</h1>
                <a href="{{ route('barang.create') }}" class="btn btn-sm btn-success"> Tambah Barang</a>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-bordered bg-white">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Harga</th>
                        <th>Stok</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($barangs as $barang)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $barang->nama_barang }}</td>
                            <td>{{ $barang->harga }}</td>
                            <td>{{ $barang->stok }}</td>
                            <td>
                                <a href="{{ route('barang.edit', $barang->id) }}" class="btn btn-sm btn-warning"> Edit</a>
                                <form action="{{ route('barang.destroy', $barang->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus barang ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center">Tidak ada data barang</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
            {{ $barangs->links() }}
        </div>
    </div>
</div>
@endsection
