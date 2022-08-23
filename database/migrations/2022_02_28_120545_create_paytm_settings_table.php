<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaytmSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paytm_settings', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('environment')->nullable();
            $table->string('marchant_id')->nullable();
            $table->string('marchant_key')->nullable();
            $table->string('marchant_website')->nullable();
            $table->string('channel')->nullable();
            $table->string('industry_type')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('paytm_settings');
    }
}
