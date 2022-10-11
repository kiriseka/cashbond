<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){

        $total = Transaction::where('user_id', auth()->user()->id)->count(); 

        $lunas = Transaction::where('user_id', auth()->user()->id)
        ->where('status_transaksi', 2)
        ->count(); 
        
        $belum_lunas = Transaction::where('user_id', auth()->user()->id)
        ->where('status_transaksi', 1)
        ->count();

        return view('home', [
            'total' => $total,
            'lunas' => $lunas,
            'belum_lunas' => $belum_lunas,

        ]);
    }
}
