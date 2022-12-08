<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('airtags', function (Blueprint $table) {
            $table->id();
            $table->dateTime('datetime');
            $table->string('serialnumber');
            $table->string('batterystatus');
            $table->string('locationpositiontype');
            $table->string('locationlatitude');
            $table->string('locationlongitude');
            $table->string('locationtimestamp');
            $table->string('mapItemFullAddress');
            $table->string('addresscountry');
            $table->string('itememoji');
            $table->string('itemname');
            $table->string('appleid');
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
        Schema::dropIfExists('airtags');
    }
};
