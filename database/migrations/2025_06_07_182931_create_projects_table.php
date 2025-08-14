<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('tagline')->nullable();
            $table->string('cta_text')->nullable();
            $table->string('cta_link')->nullable();
            $table->string('form_title')->nullable();
            $table->text('description')->nullable();
            $table->text('success_message')->nullable();
            $table->string('payment_plan')->nullable();
            $table->date('handover_date')->nullable();
            $table->string('property_type')->nullable();
            $table->string('developer_name')->nullable();
            $table->string('bedroom_range')->nullable();
            $table->string('location')->nullable();
            $table->string('map_link')->nullable();
            $table->decimal('starting_price', 15, 2)->nullable();
            $table->string('payment_plan_title')->nullable();
            $table->text('payment_plan_description')->nullable();
            $table->text('payment_milestones')->nullable();
            $table->text('floor_plans')->nullable();
            $table->json('videos')->nullable(); // Store video embed links
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('projects');
    }
}