<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserAddRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_add_roles', function (Blueprint $table) {
            $table->bigIncrements('id');


            $table->timestamps();
            $table->softDeletes();

            $table->unsignedBigInteger('subject_id');

            $table->foreign('role')
                ->references('id')
                ->on('subjects')
                ->onDelete('cascade');


            $table->foreign('user_id')
                ->references('id')->on('users')
                ->onDelete('cascade');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_add_roles');
    }
}
