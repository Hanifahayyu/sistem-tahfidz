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
        Schema::table('admin', function (Blueprint $table) {
            $table->string('admin_nama');
            $table->string('admin_username');
            $table->string('admin_password');
            $table->string('admin_email')->unique();
            $table->string('admin_telepon')->unique();
            $table->integer('admin_level_id');
            $table->integer('admin_status');
            $table->timestamp('email_verified_at')->nullable();
            $table->text('admin_foto');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('admin', function (Blueprint $table) {
            //
        });
    }
};
