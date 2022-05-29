<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;

class DashboardTransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return Transaction::where('user_id', auth()->user()->id)->get();
        return view('transaction',[
            'transactions' => Transaction::where('user_id', auth()->user()->id)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('transaction.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_customer' => 'required|max:255',
            'produk_item' => 'required|max:100',
            'nominal_transaksi' => 'required',
            'tanggal_transaksi' => 'required',
            'status_transaksi' => 'required'
        ]);
        $status_integer = $validatedData['status_transaksi']; 
        $validatedData['status_transaksi'] = (int)$status_integer;
        $validatedData['user_id'] = auth()->user()->id;
        Transaction::create($validatedData);
        return redirect('/transaction')->with('success','New transaction has been added!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function show(Transaction $transaction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function edit(Transaction $transaction)
    {
        return view('transaction.edit',[
            'transaction' => $transaction
        ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Transaction $transaction)
    {
        $validatedData = $request->validate([
            'nama_customer' => 'required|max:255',
            'produk_item' => 'required|max:100',
            'nominal_transaksi' => 'required',
            'tanggal_transaksi' => 'required',
            'status_transaksi' => 'required'
        ]);
        $status_integer = $validatedData['status_transaksi'];
        $validatedData['status_transaksi'] = (int)$status_integer;
        $validatedData['user_id'] = auth()->user()->id;
        Transaction::where('id', $transaction->id)
            ->update($validatedData);

        return redirect('/transaction')->with('success', 'New transaction has been added!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transaction $transaction)
    {
        Transaction::destroy($transaction->id);
        return redirect('/transaction')->with('deleted', 'Transaction has been deleted!');

    }
}
