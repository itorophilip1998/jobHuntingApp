<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emp_profiles', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('other_names');
            $table->string('profile_pic');
            $table->string('phone_no');
            $table->string('email');
            $table->string('social_media_handle');
            $table->string('location');
            $table->unsignedBigInteger('user_id');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('emp_profiles');
    }
}
