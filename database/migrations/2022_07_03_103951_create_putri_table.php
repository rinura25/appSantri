<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePutriTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('putri', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_santri');
            $table->string('nama_orang_tua');
            $table->date('ttl');
            $table->text('alamat');
            $table->string('tahun_ajaran');
            $table->string('kk')->nullable();
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
        Schema::dropIfExists('putri');
    }
}
