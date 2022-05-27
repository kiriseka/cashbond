<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            // $table->date('tangal_transaksi');
            // $table->string('produk_item');
            $table->integer('nominal_transaksi');
            $table->integer('status_transaksi');
            $table->integer('tagihan');
            // $table->date('tenggat_waktu');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transactions');
    }
};

Transaction::create(['user_id' => 1,'nominal_transaksi' => 2000,'status_transaksi' => 1,'tagihan' => 200]);
