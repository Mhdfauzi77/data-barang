@extends('layouts.app')

@section('content')

<head>
    <style>
        body {
    font-family: Arial, sans-serif;
    margin: 20px;
    background-color: #f8f9fa;
}

.navbar {
    background-color: #ffffff;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.navbar-brand {
    font-weight: bold;
    color: #333;
    text-decoration: none;
}

.navbar-nav .nav-link {
    color: #555;
    padding: 10px 15px;
}

.navbar-nav .nav-link:hover {
    color: #007bff;
}

.nav-item.dropdown .dropdown-menu {
    border-radius: 5px;
    border: none;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.dropdown-item {
    color: #333;
    padding: 10px 15px;
}

.dropdown-item:hover {
    background-color: #007bff;
    color: #fff;
}

.results {
    margin-top: 20px;
}

.result-item {
    border: 1px solid #ddd;
    padding: 10px;
    margin-bottom: 10px;
    background-color: #fff;
    border-radius: 5px;
}

.result-item a {
    font-weight: bold;
    color: #007bff;
    text-decoration: none;
}

.result-item a:hover {
    text-decoration: underline;
}

.result-item p {
    margin-top: 5px;
    color: #555;
}

.card {
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.card-header {
    background-color: #007bff;
    color: #fff;
    font-weight: bold;
    text-align: center;
}

.card-body {
    padding: 20px;
}

    </style>
</head>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><B>Tampilan Home</B></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                <p>
                    selamat datang di apliksi pencatan barang. silahkan klik menu dibagian kanan atas untuk melihat beberapa menu yang tersedia.
                </p>

                <div class="card-body">
                    <div class="results">
                        <div class="result-item">
                            <a href="{{route('barang.index') }}" class="dropdown-item"><B>Data Barang Yg Tersedia</B> <B><== Silakan klik</B></a>
                            <p>Menu ini digunakan untuk menambahkan barang baru, melihat daftar barang, mengedit barang, dan menghapus barang.</p>
                        </div>
                        <div class="result-item">
                            <a href="{{route('penjualan.index')}}" class="dropdown-item"><B>Transaksi Pembelian</B> <B><== Silakan klik</B></a>
                            <p>Menu ini digunakan untuk menambahkan penjualan baru, melihat daftar barang yang sudah terjual</p>
                        </div>
                </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
