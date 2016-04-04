<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSignupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('signups', function(Blueprint $table) {
            $table->increments('id', 30);
            $table->integer('exam_id')->unsigned()->nullalbe();
            $table->string('studentID', 30);
            $table->string('firstName');
            $table->string('lastName');
            $table->string('group', 15);
            $table->timestamps();

            $table->foreign('exam_id')->references('id')->on('exams');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('signups');
    }
}
