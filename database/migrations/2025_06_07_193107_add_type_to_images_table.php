<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTypeToImagesTable extends Migration
{
    public function up()
    {
        Schema::table('images', function (Blueprint $table) {
            if (!Schema::hasColumn('images', 'type')) {
                $table->string('type')->nullable();
            }
        });
    }

    public function down()
    {
        Schema::table('images', function (Blueprint $table) {
            if (Schema::hasColumn('images', 'type')) {
                $table->dropColumn('type');
            }
        });
    }
}