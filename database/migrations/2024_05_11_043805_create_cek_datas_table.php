<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('cek_datas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_rumah');
            $table->string('nama');
            $table->string('noHp',15);
            $table->date('tgl_sewa');
            $table->date('tgl_keluar');
            $table->timestamps();
        });
        Schema::table('cek_datas', function (Blueprint $table) { 
            $table->foreign('id_rumah')->references('id')->on('data_rumahs')
            ->onUpdate('cascade')->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cek_datas');
        Schema::table('cek_datas', function(Blueprint $table) {
            $table->dropForeign('cek_datas_customers_id_foreign');
        });
        Schema::table('cek_datas', function(Blueprint $table) {
            $table->dropIndex('cek_datas_customers_id_foreign');
        });
        Schema::table('cek_datas', function(Blueprint $table) {
            $table->dropForeign('cek_datas_customers_id_foreign');
        });
        Schema::table('cek_datas', function(Blueprint $table) {
            $table->dropIndex('cek_datas_customers_id_foreign');
        });
        Schema::dropIfExists('cek_datas');
    }
};
