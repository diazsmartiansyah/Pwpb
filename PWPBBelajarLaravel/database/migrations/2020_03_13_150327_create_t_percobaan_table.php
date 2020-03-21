<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTPercobaanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_percobaan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('nip',10);
            $table->string('nama');
            $table->text('alamat');
            $table->year('tahun_kelahiran');
            $table->float('gaji_pertahun');
            $table->smallInteger('jumlah_anak');
            $table->unsignedInteger('tingkat');
            $table->unsignedSmallInteger('jumlah_saudara');
            $table->unsignedTinyInteger('jumlah_rumah');
            $table->unsignedMediumInteger('tunjangan');
            $table->enum('role', ['admin', 'user']);
            $table->boolean('sudah_nikah');
            $table->date('mulai_cuti');
            $table->date('beres_cuti');
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
        Schema::dropIfExists('t_percobaan');
    }
}
