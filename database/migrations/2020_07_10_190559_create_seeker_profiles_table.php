<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeekerProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seeker_profiles', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('other_names');
            $table->string('profile_pic');
            $table->string('gender');
            $table->string('phone_no');
            $table->string('email');
            $table->string('social_media_handle');
            $table->text('bio');
            $table->text('technical_skills');
            $table->text('soft_skills');
            $table->text('volunteer_experience');
            $table->string('years_of_experience');
            $table->text('education');
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
        Schema::dropIfExists('seeker_profiles');
    }
}
