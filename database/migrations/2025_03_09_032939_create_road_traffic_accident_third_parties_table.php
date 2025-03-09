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
        Schema::create('road_traffic_accident_third_parties', function (Blueprint $table) {
            $table->id();
            $table->foreignId('road_traffic_accident_id')->constrained(table: 'road_traffic_accidents', indexName: 'rta_tp_road_traffic_accident_id_foreign')->cascadeOnDelete();
            // third party details
            $table->string('tp_title')->nullable();
            $table->string('tp_first_name')->nullable();
            $table->string('tp_last_name')->nullable();
            $table->string('tp_address_line_1')->nullable();
            $table->string('tp_address_line_2')->nullable();
            $table->string('tp_city')->nullable();
            $table->string('tp_postal_code')->nullable();
            $table->string('tp_country')->nullable();
            $table->string('tp_email')->nullable();
            $table->string('tp_phone')->nullable();
            $table->string('tp_vehicle_registration_number')->nullable();
            $table->string('tp_vehicle_make')->nullable();
            $table->string('tp_vehicle_model')->nullable();
            $table->string('tp_vehicle_colour')->nullable();
            $table->string('tp_vehicle_year')->nullable();
            $table->string('tp_insurance_company')->nullable();
            $table->string('tp_insurance_policy_number')->nullable();
            $table->string('tp_insurance_company_phone')->nullable();
            // occupancies in the vehicles
            $table->string('tp_passengers_count')->nullable();
            // accident details
            $table->string('tp_vehicle_speed')->nullable();
            $table->string('tp_vehicle_damage')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('road_traffic_accident_third_parties');
    }
};
