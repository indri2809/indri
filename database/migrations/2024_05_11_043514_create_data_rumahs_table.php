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
        Schema::create('data_rumahs', function (Blueprint $table) {
            $table->id();
            $table->string('alamat');
            $table->string('kota');
            $table->string('img');
            $table->decimal('amount', 10, 2);
            $table->enum('status',['disewa','kosong']);
            $table->timestamps();
        });
        Schema::table('data_rumahs', function (Blueprint $table) {
                    
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_rumas');
        Schema::table('data_rumahs', function(Blueprint $table) {
            $table->dropForeign('data_rumahs_cek_datas_id_foreign');
        });
        Schema::table('customers', function(Blueprint $table) {
            $table->dropIndex('data_rumahs_cek_datas_id_foreign');
        });
        Schema::table('data_rumahs', function(Blueprint $table) {
            $table->dropForeign('data_rumahs_cek_datas_id_foreign');
        });
        Schema::table('data_rumahs', function(Blueprint $table) {
            $table->dropIndex('data_rumahs_cek_datas_id_foreign');
        });

        Schema::dropIfExists('data_rumahs');
    }
};
