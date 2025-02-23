@extends('layouts.app')

@section('title', 'Tambah Barang')

@section('content')

<head>
    <style>
        .container {
    margin-top: 20px;
    display: flex;
    justify-content: center;
}

.card {
    width: 50%;
    border-radius: 10px;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
}

.card-header {
    background-color: #007bff;
    color: white;
    font-size: 18px;
    font-weight: bold;
    padding: 15px;
    border-radius: 10px 10px 0 0;
    text-align: center;
}

.card-body {
    padding: 20px;
}

.form-label {
    font-weight: bold;
    color: #333;
}

.form-control {
    border-radius: 5px;
    border: 1px solid #ced4da;
    padding: 10px;
    font-size: 16px;
}

.form-control:focus {
    border-color: #007bff;
    box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
}

.btn {
    padding: 10px 15px;
    border-radius: 5px;
    font-size: 16px;
    transition: 0.3s;
}

.btn-primary {
    background-color: #007bff;
    border: none;
}

.btn-primary:hover {
    background-color: #0056b3;
}

.btn-secondary {
    background-color: #6c757d;
    border: none;
}

.btn-secondary:hover {
    background-color: #545b62;
}

    </style>
</head>

<div class="container">
    <div class="card">
        <div class="card-header">
            <h1>Tambah Barang</h1>
        </div>
        <div class="card-body">
            <form action="{{ route('barang.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="nama_barang" class="form-label">Nama Barang</label>
                    <input type="text" name="nama_barang" id="nama_barang" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="stok" class="form-label">Stok</label>
                    <input type="number" name="stok" id="stok" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="stok" class="form-label">Harga</label>
                    <input type="number" name="harga" id="harga" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="{{ route('barang.index') }}" class="btn btn-secondary">Batal</a>
            </form>
        </div>
    </div>
</div>
@endsection