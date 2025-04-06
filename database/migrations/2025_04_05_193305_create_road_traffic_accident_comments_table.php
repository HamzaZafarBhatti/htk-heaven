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
        Schema::create('road_traffic_accident_comments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('road_traffic_accident_id')->constrained()->onDelete('cascade');
            $table->text('message');
            $table->boolean('is_hidden')->default(false);
            $table->foreignId('created_by')->constrained('users')->onDelete('cascade');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('road_traffic_accident_comments');
    }
};
