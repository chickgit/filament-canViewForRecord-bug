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
        Schema::create('food_package_availability_snack', function (Blueprint $table) {
            $table->string('food_package_id');
            $table->string('snack_id');
            $table->timestamps();

            $table->foreign('food_package_id')->references('id')->on('food_packages')->onDelete('cascade');
            $table->foreign('snack_id')->references('id')->on('snacks')->onDelete('cascade');

            $table->unique(['food_package_id', 'snack_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('food_package_availability_snack');
    }
};
