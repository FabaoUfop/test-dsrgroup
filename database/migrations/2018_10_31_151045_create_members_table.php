<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->string('nome')->nullable();
            $table->string('sobrenome')->nullable();
            $table->string('pai')->nullable();
            $table->string('mae')->nullable();
            $table->string('img_profile')->nullable();
            $table->date('data_nascimento');
            $table->string('cpf', 18);
            $table->string('rg', 18);
            $table->string('email', 50)->unique();
            $table->string('whatsapp');
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('members');
    }
}
