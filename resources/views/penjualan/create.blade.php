@extends('layouts.app')

@section('title', 'Transaksi')

@section('content')

<head>
    <style>
        /* Styling untuk container utama */
.container {
    max-width: 600px;
    margin: 30px auto;
    padding: 20px;
}

/* Styling untuk card */
.card {
    border-radius: 10px;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
    overflow: hidden;
}

.card-header {
    background-color: #28a745;
    color: white;
    font-size: 1.5rem;
    font-weight: bold;
    padding: 15px;
    text-align: center;
}

/* Styling untuk form */
.form-label {
    font-weight: bold;
}

.form-control {
    border-radius: 5px;
    padding: 10px;
    border: 1px solid #ddd;
    width: 100%;
}

.mb-3 {
    margin-bottom: 15px;
}

/* Styling untuk tombol */
.btn-success {
    width: 100%;
    padding: 10px;
    font-size: 1.1rem;
    font-weight: bold;
    background-color: #28a745;
    border: none;
    color: white;
    border-radius: 5px;
    transition: background 0.3s;
}

.btn-success:hover {
    background-color: #218838;
}

/* Styling untuk alert */
.alert {
    padding: 10px;
    border-radius: 5px;
    margin-bottom: 15px;
}

.alert-danger {
    background-color: #dc3545;
    color: white;
}

/* Responsiveness */
@media (max-width: 768px) {
    .container {
        padding: 15px;
    }
}

    </style>
</head>

<div class="container">
    <div class="card">
        <div class="card-header">
            <h1>Penjualan</h1>
        </div>
        <div class="card-body">
            @if(session('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('error') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <form action="{{ route('penjualan.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="id_barang" class="form-label">Pilih Barang</label>
                    <select name="id_barang" id="id_barang" class="form-control" required>
                        <option value="" disabled selected>-- Pilih Barang --</option>
                        @foreach($barangs as $barang)
                            <option value="{{ $barang->id }}">{{ $barang->nama_barang }} (Stok: {{ $barang->stok }})</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="jumlah" class="form-label">Jumlah</label>
                    <input type="number" name="jumlah" id="jumlah" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-success">Proses Transaksi</button>
            </form>

        </div>
    </div>
</div>
@endsection