<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfileDbsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profile_dbs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('pid');
            $table->string('fullname');
            $table->string('email');
            $table->string('p_address');
            $table->string('c_address');
            $table->integer('mobile');
            $table->integer('telephone');
            $table->integer('zip');
            $table->string('created_by');
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
        Schema::dropIfExists('profile_dbs');
    }
}
