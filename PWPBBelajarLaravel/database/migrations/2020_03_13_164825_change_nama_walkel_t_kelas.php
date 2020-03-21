<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeNamaWalkelTKelas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('t_kelas',function($table){
            $table->renameColumn('nama_walkel','nama_wali_kelas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('t_kelas',function($table){
            $table->renameColumn('nama_wali_kelas','nama_walkel');
        });
    }
}
