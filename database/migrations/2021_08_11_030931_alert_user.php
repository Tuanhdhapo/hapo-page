<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlertUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('username');
            $table->integer('role');
            $table->string('phone')->nullable();
            $table->date('birthday')->nullable();
            $table->string('address')->nullable();
            $table->text('about_me')->nullable();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColum('username');
            $table->dropColumn('role');
            $table->dropColumn('phone');
            $table->dropColumn('birthday');
            $table->dropColumn('address');
            $table->dropColumn('about_me');
            $table->dropSoftDeletes();
        });
    }
}
