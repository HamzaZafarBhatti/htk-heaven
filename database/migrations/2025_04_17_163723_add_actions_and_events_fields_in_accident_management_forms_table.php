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
        Schema::table('accident_management_forms', function (Blueprint $table) {
            $table->json('actions')->nullable();
            $table->json('events')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('accident_management_forms', function (Blueprint $table) {
            $table->dropColumn('actions');
            $table->dropColumn('events');
        });
    }
};
