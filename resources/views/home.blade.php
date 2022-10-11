@extends('layouts.app')

    <!-- Page content -->
    @section('content')
        <div class="konten">
            <h2>Welcome Back</h2>
            <h4>Hello, {{ auth()->user()->name }}</h4>
            <div class="row">
                <div class="card card-green">
                    <b id="nbr">{{ $total }}</b>
                    <div class="container container-green">
                        <p>Total Transaksi</p>
                    </div>
                </div>
                <div class="card card-blue">
                    <b id="nbre">{{ $lunas }}</b>
                    <div class="container container-blue">
                        <p>Transaksi Lunas</p>
                    </div>
                </div>
                <div class="card card-red">
                    <b id="nbra">{{ $belum_lunas }}</b>
                    <div class="container container-red">
                        <p>Transaksi Belum Lunas</p>
                    </div>
                </div>
            </div>
        </div>
        <script src="/js/script.js"></script> 
    @endsection
   
