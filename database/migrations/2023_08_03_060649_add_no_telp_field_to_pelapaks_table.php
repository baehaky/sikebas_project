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
        Schema::table('pelapaks', function (Blueprint $table) {
            $table->string('no_telp')->unique();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('pelapaks', function (Blueprint $table) {
            if (Schema::hasColumn('users', 'no_telp')) {
                $table->dropColumn('no_telp');
            }
        });
    }
};
