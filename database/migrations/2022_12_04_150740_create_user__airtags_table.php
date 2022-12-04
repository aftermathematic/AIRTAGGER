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
        Schema::create('users_airtags', function (Blueprint $table) {
            $table->foreignId('user_id')->constrained('users')->unsigned()->references('id')->onDelete('cascade');
            $table->foreignId('airtag_id')->constrained('airtags')->unsigned()->references('id')->onDelete('cascade');

            $table->primary(['user_id','airtag_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users_airtags');
    }
};
