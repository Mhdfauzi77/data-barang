@extends('layouts.app')

@section('title', 'Edit Barang')

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
    background-color: #28a745;
    color: white;
    font-size: 20px;
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
    border-color: #28a745;
    box-shadow: 0 0 5px rgba(40, 167, 69, 0.5);
}

.btn {
    padding: 10px 15px;
    border-radius: 5px;
    font-size: 16px;
    transition: 0.3s;
}

.btn-primary {
    background-color: #28a745;
    border: none;
}

.btn-primary:hover {
    background-color: #218838;
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
        <div class="card-header"><h1>Edit Barang</h1></div>
        <div class="card-body">
            <form action="{{ route('barang.update', $barang->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="nama_barang" class="form-label">Nama Barang</label>
                    <input type="text" name="nama_barang" id="nama_barang" class="form-control" value="{{ $barang->nama_barang }}" required>
                </div>
                <div class="mb-3">
                    <label for="stok" class="form-label">Stok</label>
                    <input type="number" name="stok" id="stok" class="form-control" value="{{ $barang->stok }}" required>
                </div>
                <div class="mb-3">
                    <label for="stok" class="form-label">harga</label>
                    <input type="number" name="harga" id="harga" class="form-control" value="{{ $barang->harga }}" required>
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
                <a href="{{ route('barang.index') }}" class="btn btn-secondary">Batal</a>
            </form>
        </div>
    </div>
</div>

@endsection