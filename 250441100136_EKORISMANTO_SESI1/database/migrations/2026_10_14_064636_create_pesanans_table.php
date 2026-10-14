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
        Schema::create('pesanans', function (Blueprint $table) {
            $table->bigintunsigned()->primarykey;
            $table->bigintunsigned("layanan_id");
            $table->varchar("nama_pelanggan");
            $table->date("tanggal_masuk");
            $table->decimal("jumlah");
            $table->int("total_biaya");
            $table->enum("status")->proses->selesai;
            $table->timestamps(created_at);
            $table->timestamps(updated_at);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pesanans');
    }
};
