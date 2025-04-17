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
        Schema::create('accident_management_forms', function (Blueprint $table) {
            $table->id();
            $table->foreignId('road_traffic_accident_id')->constrained()->onDelete('cascade');
            $table->date('last_update_date')->nullable();
            $table->date('next_update_date');
            $table->string('claim_type');
            $table->string('file_status');
            $table->string('current_position')->nullable();
            $table->string('status');
            $table->string('claim_handler')->nullable();
            $table->string('tp_claim_reference')->nullable();
            $table->string('tp_insurance_company_email')->nullable();
            $table->text('notes')->nullable();
            $table->float('settlement_amount')->default(0);
            $table->string('vehicle_condition');
            $table->json('images')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accident_management_forms');
    }
};
