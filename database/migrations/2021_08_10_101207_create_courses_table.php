<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course', function (Blueprint $table) {
            $table->id();
            $table->string('course_img')->nullable();
            $table->string('course_title')->nullable();
            $table->string('course_content')->nullable();
            $table->string('descriptions')->nullable();
            $table->integer('learners')->default(0);
            $table->integer('lessons')->default(0);
            $table->string('time')->nullable();
            $table->string('tags')->nullable();
            $table->string('price')->default(0);
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
        Schema::dropIfExists('courses');
    }
}
