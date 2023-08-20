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
        Schema::table('model_has_permissions', function (Blueprint $table) {
            $columnNames = config('permission.column_names');
            $table->uuid($columnNames['model_morph_key'])->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('model_has_permissions', function (Blueprint $table) {
            $columnNames = config('permission.column_names');
            $table->unsignedBigInteger($columnNames['model_morph_key'])->change();
        });
    }
};
