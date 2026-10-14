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
        Schema::create('layanans', function (Blueprint $table) {
            $table->bigintunsigned()->primarykey;
            $table->varchar("kode_layanan")->required->unique;
            $table->varchar("nama_layanan")->required;
            $table->enum("jenis")->required;
            $table->int("tarif_per_satuan");
            $table->timestamps(creade_at);
            $table->timestamps(update_at);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('layanans');
    }
};
