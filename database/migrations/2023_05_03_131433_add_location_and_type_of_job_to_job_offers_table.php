<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('job_offers', function (Blueprint $table) {
            $table->string('location');
            $table->string('type_of_job');
        });
    }

    public function down()
    {
        Schema::table('job_offers', function (Blueprint $table) {
            $table->dropColumn(['location', 'type_of_job']);
        });
    }

};
