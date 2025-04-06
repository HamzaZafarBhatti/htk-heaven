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
        Schema::create('road_traffic_accident_witnesses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('road_traffic_accident_id')->constrained(table: 'road_traffic_accidents', indexName: 'rta_witness_road_traffic_accident_id_foreign')->cascadeOnDelete();
            // independant witness
            $table->string('witness_title')->nullable();
            $table->string('witness_first_name')->nullable();
            $table->string('witness_last_name')->nullable();
            $table->string('witness_address_line_1')->nullable();
            $table->string('witness_address_line_2')->nullable();
            $table->string('witness_city')->nullable();
            $table->string('witness_postal_code')->nullable();
            $table->string('witness_country')->nullable();
            $table->string('witness_email')->nullable();
            $table->string('witness_phone')->nullable();
            $table->boolean('is_cctv')->default(false);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('road_traffic_accident_witnesses');
    }
};
