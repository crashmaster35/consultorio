<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('s_user_id');
            $table->unsignedInteger('r_user_id');
            $table->string('subject', 150);
            $table->text('body');
            $table->enum('status', ['sended', 'opened', 'trashed']);
            $table->enum('priority', ['normal', 'urgent']);
            $table->softDeletes();
            $table->timestamps();
        });
        Schema::table('messages', function($table) {
            $table->foreign('s_user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('r_user_id')->references('id')->on('users')->onDelete('cascade');
        });        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('messages');
    }
}
