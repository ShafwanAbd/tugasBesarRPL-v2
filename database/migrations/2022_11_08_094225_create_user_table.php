<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
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
        Schema::create('user', function (Blueprint $table) {
            $table->id();
            
            $table->string('username');
            $table->string('password');
            $table->string('fullname');
            $table->string('universitas');
            $table->string('fakultas');
            $table->string('jurusan');
            $table->rememberToken();
            $table->timestamps();
        });

        DB::table('user')->insert(
            array(
                ['username' => 'stairways',
                'password' => '123',
                'fullname' => 'Muhammad Shafwan Abdullah',
                'universitas' => 'Universitas Siliwangi',
                'fakultas' => 'Teknik',
                'jurusan' => 'Informatika'],

                ['username' => 'zulfan123',
                'password' => '123',
                'fullname' => 'Zulfan Syahidan Alfarra',
                'universitas' => 'Universitas Siliwangi',
                'fakultas' => 'Teknik',
                'jurusan' => 'Informatika'],
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
        Schema::dropIfExists('user');
    }
};
