<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
      
        
        Schema::create('post', function (Blueprint $table) {
        $table->increments('id');
        $table->integer('user_id')->unsigned();
        $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');;
        $table->string('Post_Title');
        $table->string('Job_Title');
        $table->string('Description');
        $table->string('Role');
        $table->string('Qualification');
        $table->string('Location');
        $table->string('Salary_Range');
        $table->string('Deadline');

        $table->timestamps();
        });

        /**
         * Reverse the migrations.
         *
         * @return void
         */
    }
    public function down()
                {
           // Schema::drop('users');
            Schema::drop('job');
        }
}