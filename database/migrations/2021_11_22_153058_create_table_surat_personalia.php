<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableSuratPersonalia extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_surat_personalia', function (Blueprint $table) {
            $table->id();
            $table->string('judul_surat');
            $table->string('jenis_surat');
            $table->string('kepada');
            $table->string('alamat');
            $table->string('paragraf');
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
        Schema::dropIfExists('table_surat_personalia');
    }
}
