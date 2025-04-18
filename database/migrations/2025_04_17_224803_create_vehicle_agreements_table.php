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
        Schema::create('vehicle_agreements', function (Blueprint $table) {
            $table->id();
            $table->date('start_date');
            $table->time('start_time');
            $table->date('end_date');
            $table->time('end_time');
            $table->string('driver_reference');
            $table->string('title');
            $table->string('first_name');
            $table->string('middle_name')->nullable();
            $table->string('last_name')->nullable();
            $table->date('dob');
            $table->string('email');
            $table->string('phone');
            $table->string('address_line_1');
            $table->string('address_line_2')->nullable();
            $table->string('city');
            $table->string('postal_code');
            $table->string('country');
            $table->string('license_number');
            $table->string('license_expiry_date');
            $table->string('license_issuing_country');
            $table->string('pco_badge_number');
            $table->date('pco_badge_expiry_date');
            $table->string('nin');
            $table->string('nationality');
            $table->string('vehicle_registration_number');
            $table->string('vehicle_make');
            $table->string('vehicle_model');
            $table->string('vehicle_colour');
            $table->text('customer_signature');
            $table->date('customer_signature_date');
            $table->text('company_signature')->nullable();
            $table->date('company_signature_date');
            $table->string('storage');
            $table->string('daily_rent');
            $table->string('rental_term')->nullable();
            $table->string('e_reference');
            $table->text('notes')->nullable();
            $table->string('driving_licence_front');
            $table->string('driving_licence_back');
            $table->string('pco_badge_front');
            $table->string('pco_badge_back');
            $table->string('pco_license_paper_part');
            $table->string('proof_of_id');
            $table->string('nin_image');
            $table->string('proof_of_address1');
            $table->string('proof_of_address2');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehicle_agreements');
    }
};
