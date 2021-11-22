<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableSuratTugas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_surat_tugas', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->string('nim');
            $table->string('nama');
            $table->string('nama_penyelenggara');
            $table->date('tanggal');
            $table->string('tempat');
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
        Schema::dropIfExists('table_surat_tugas');
    }
}
