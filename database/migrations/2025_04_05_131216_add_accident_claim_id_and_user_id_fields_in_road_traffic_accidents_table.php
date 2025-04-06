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
        Schema::table('road_traffic_accidents', function (Blueprint $table) {
            $table->foreignId('user_id')->nullable()->constrained()->onDelete('cascade');
            $table->foreignId('accident_claim_id')->nullable()->constrained()->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('road_traffic_accidents', function (Blueprint $table) {
            $table->dropForeign(['user_id', 'accident_claim_id']);
            $table->dropColumn('user_id');
            $table->dropColumn('accident_claim_id');
        });
    }
};
