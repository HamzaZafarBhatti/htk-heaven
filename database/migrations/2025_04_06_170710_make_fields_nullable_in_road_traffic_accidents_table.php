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
            $table->string('driver_reference')->nullable()->change();
            $table->string('agreement_reference')->nullable()->change();
            $table->string('passengers_count')->nullable()->change();
            $table->string('address_line_2')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('road_traffic_accidents', function (Blueprint $table) {
            $table->string('driver_reference')->nullable(false)->change();
            $table->string('agreement_reference')->nullable(false)->change();
            $table->string('passengers_count')->nullable(false)->change();
            $table->string('address_line_2')->nullable(false)->change();
        });
    }
};
