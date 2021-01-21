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
            $table->string('firstName');
            $table->string('lastName');
            $table->string('gender');
            $table->string('email')->unique();
            $table->integer('role');
            $table->string('password');
            $table->string('profile');
            $table->rememberToken();
            $table->timestamps();
        }); 
        
        DB::table('users')->insert(
            array(
                'firstName' => "Teacher",
                'lastName' => "Admin",
                'gender' => "Male",
                'email' => "teacher.admin@gmail.com",
                'role' => 1,
                'password' => bcrypt('password'),
                'profile' => 'user.png',
                
            )
        );

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
