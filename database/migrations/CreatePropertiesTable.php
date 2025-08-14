<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertiesTable extends Migration
{
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string('property_id')->unique();
            $table->string('property_type');        // Apartment, Villa, etc.
            $table->string('purpose');              // For Sale, For Rent
            $table->decimal('area_sqm', 10, 2);       // Stored in sqm
            $table->decimal('price', 15, 2);
            $table->unsignedInteger('bedrooms');
            $table->unsignedInteger('bathrooms');
            $table->unsignedInteger('garage_size');
            $table->string('completion_status');    // Off-Plan, Ready, Rent
            $table->string('furnishing');
            $table->date('added_on');
            $table->string('handover_date')->nullable(); // For off plan (ex: "Q1 2026")
            $table->decimal('average_rent', 15, 2)->nullable(); // For ready properties (if applicable)
            $table->text('validated_information')->nullable();  // JSON or text
            $table->text('building_information')->nullable();   // JSON or text
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('properties');
    }
}
