@extends('layouts.app')

    <!-- Page content -->
    @section('content')
        <div class="content">
            <img src="img/logo-polos.png" alt="">
            <h2>Welcome Back</h2>
            <h4>Hello, {{ auth()->user()->name }}</h4>
        </div>
        <script src="/js/script.js"></script> 
    @endsection
   
