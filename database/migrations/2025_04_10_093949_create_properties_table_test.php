<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertiesTableTest extends Migration
{
    /**
     * Run the migrations.
     *
     * This will create the 'properties' table with all the columns needed for
     * the dynamic property details page based on your static template.
     *
     * Columns include:
     * - title, description, property_code
     * - address, price, property_size, year_built
     * - bedrooms, bathrooms, garage, garage_size
     * - property_type, property_status, deposit, pool_size, additional_rooms,
     *   last_remodel_year, amenities, equipment, features (for checklists)
     * - video_url and image (for the main property image)
     * - plus the standard created_at and updated_at timestamps.
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            // Basic info
            $table->string('property_name');
            $table->string('property_id')->unique();
            $table->text('description')->nullable();
            $table->string('address');
            $table->string('developer')->nullable();
            $table->string('property_usage')->nullable();
            $table->decimal('price', 15, 2);
            $table->integer('property_size');
            $table->decimal('building_area', 10, 2)->nullable();
            $table->year('year_built')->nullable();
            $table->string('handover_date')->nullable();

            // Details
            $table->integer('bedrooms');
            $table->integer('bathrooms');
            $table->integer('garage')->nullable();

            // Property category and status
            $table->string('property_type');
            $table->string('property_status');
            $table->string('property_completion');

            // Additional fields
            $table->string('property_furnishing');
            $table->integer('property_built_up_area');
            $table->string('property_parking_availability')->nullable();
            $table->string('building_name')->nullable();
            $table->integer('building_parking_spaces')->nullable();
            $table->integer('number_elevators')->nullable();
            $table->integer('swimming_pool')->nullable();
            $table->integer('retail_centers')->nullable();
            $table->integer('total_floors')->nullable();

            // Optional legacy or future use fields (commented in validation)
            $table->string('garage_size')->nullable();
            $table->string('deposit')->nullable();
            $table->string('pool_size')->nullable();
            $table->string('additional_rooms')->nullable();
            $table->integer('last_remodel_year')->nullable();
            $table->string('amenities')->nullable();
            $table->string('equipment')->nullable();
            $table->text('features')->nullable();
            $table->string('video_url')->nullable();
            $table->string('image')->nullable();
            $table->string('pdf')->nullable();
            // Timestamps
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * This will drop the 'properties' table.
     */
    public function down()
    {
        Schema::dropIfExists('properties');
    }
}
