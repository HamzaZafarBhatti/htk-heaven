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
        Schema::create('accident_claims', function (Blueprint $table) {
            $table->id();
            $table->string('email')->unique();
            $table->string('full_name');
            $table->string('phone');
            $table->date('accident_date');
            $table->string('car_registration_number');
            $table->string('accident_fault')->comment('my-fault, somebody-else, fifty-fifty, not-sure');
            $table->string('accident_location')->comment('england/wales, scotland, northern-ireland');
            $table->string('is_car_roadworthy')->comment('yes, no, not-sure');
            $table->json('pictures')->nullable();
            $table->boolean('privacy_policy_accepted')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accident_claims');
    }
};
