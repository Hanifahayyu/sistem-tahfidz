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
        Schema::create('set_kelas', function (Blueprint $table) {
            $table->id();
            $table->integer('set_kelas_kode');
            $table->integer('set_user_id');
            $table->integer('set_tahun_id');
            $table->integer('set_smester');
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
        Schema::dropIfExists('set_kelas');
    }
};
