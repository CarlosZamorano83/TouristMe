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
            $table->string('email',50)->unique()->index();
            $table->string('password');
            $table->integer('rol_id');
            $table->timestamps();
        });


        $user = new App\Users();
        $user->password = encrypt('pwadmin');
        $user->email = 'carlos_zamorano_apps1ma1718@cev.com';
        $user->name = 'admin';
        $user->rol_id = 1;
        $user->save();


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

