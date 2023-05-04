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
        Schema::create('integer_product_ca_values', function (Blueprint $table) {
            $table->id();
            $table->integer("product_id");
            $table->integer("product_attribute_id");
            $table->integer("integer_value");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('integer_product_ca_values');
    }
};