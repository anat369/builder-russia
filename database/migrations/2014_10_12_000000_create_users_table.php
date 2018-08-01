<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->integer('is_admin');
            $table->rememberToken();
            $table->timestamps();
        });

        DB::insert('insert into users (`name`, `email`, `password`, `is_admin`) values (?, ?, ?, ?)',
            ['Анатолий', 'anat369@rambler.ru', '$2y$10$pmUeLkVTAQ56D2Mh6X6UmuUxjEcpaHMguZBrF3ESrIyXYFPEDZmiK', 1]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
