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
        Schema::create('road_traffic_accidents', function (Blueprint $table) {
            $table->id();
            $table->string('status')->default('pending');
            $table->date('accident_reporting_date');
            $table->string('driver_reference');
            $table->string('agreement_reference');
            //driver details
            $table->string('title');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email');
            $table->string('phone');
            $table->string('dob');
            $table->string('occupation')->nullable();
            $table->string('address_line_1');
            $table->string('address_line_2');
            $table->string('city');
            $table->string('postal_code');
            $table->string('country');
            $table->string('nin');
            $table->string('injury_type')->nullable();
            $table->string('insurance_company')->nullable();
            $table->string('insurance_policy_number')->nullable();
            $table->string('insurance_company_phone')->nullable();
            $table->foreignId('cover_type_id')->nullable()->constrained('insurance_cover_types')->restrictOnDelete();
            $table->boolean('is_police_reported')->default(false);
            $table->string('cad_reference_number')->nullable();
            // vehicle details
            $table->string('vehicle_registration_number');
            $table->string('vehicle_make');
            $table->string('vehicle_model');
            $table->string('vehicle_colour');
            $table->string('vehicle_year');
            $table->boolean('is_vehicle_road_worthy')->default(false);
            // occupancies in the vehicles
            $table->string('passengers_count');
            $table->boolean('is_passenger_injured')->default(false);
            $table->string('passenger_injury_type')->nullable();
            // accident details
            $table->date('accident_date');
            $table->time('accident_time');
            $table->string('accident_location');
            $table->string('journey_purpose')->nullable();
            $table->boolean('was_driver_wearing_seat_belt')->default(false);
            $table->string('weather_condition')->nullable();
            $table->string('road_condition')->nullable();
            $table->string('vehicle_speed')->nullable();
            $table->string('vehicle_damage')->nullable();
            $table->string('police_reference_number')->nullable();
            // incident details
            $table->text('circumstances')->nullable();
            $table->text('notes')->nullable();
            // pictures
            $table->json('pictures')->default(null);
            $table->string('insurance_certificate')->nullable();
            $table->string('contract')->nullable();
            $table->string('id_proof')->nullable();
            $table->json('others')->default(null);
            // signature
            $table->text('signature')->nullable();
            $table->date('signature_date')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('road_traffic_accidents');
    }
};
