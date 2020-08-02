<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Master extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('vendors', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->timestamps();
        });

        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->enum('tipe', ['private', 'open'])->default('open');
            $table->integer('harga')->default(0);
            $table->integer('min_kuota')->default(0);
            $table->integer('max_kuota')->default(0);
            $table->date('tgl_berangkat')->nullable();
            $table->string('url');
            $table->string('deskripsi');
            $table->timestamps();
        });

        Schema::create('transactions', function (Blueprint $table){
            $table->id();
            $table->string('no_transaksi');
            $table->bigInteger('product_id')->unsigned();
            $table->integer('harga')->default(0);
            $table->integer('kuota')->default(0);
            $table->enum('status', ['0', '1', '2'])->default('0');
            $table->bigInteger('user_id')->unsigned();
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('product_id')->references('id')->on('products');
        });

        Schema::create('payment', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('transactions_id')->unsigned();
            $table->bigInteger('vendors_id')->unsigned();
            $table->bigInteger('user_id')->unsigned();
            $table->string('url');
            $table->text('description');
            $table->enum('status', ['0', '1', '2'])->default('0');
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('vendors_id')->references('id')->on('vendors');
            $table->foreign('transactions_id')->references('id')->on('transactions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
