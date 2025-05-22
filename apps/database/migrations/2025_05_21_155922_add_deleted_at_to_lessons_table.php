<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::table('lessons', function (Blueprint $table) {
            $table->softDeletes(); // Tambah kolom deleted_at
        });
    }

    public function down(): void {
        Schema::table('lessons', function (Blueprint $table) {
            $table->dropSoftDeletes(); // Hapus kolom deleted_at jika rollback
        });
    }
};