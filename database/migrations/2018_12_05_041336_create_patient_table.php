<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name', 100);
            $table->string('last_name', 100)->nullable();
            $table->string('fathers_name', 100)->nullable();
            $table->string('mothers_name', 100)->nullable();
            $table->date('birth_date');
            $table->string('phone', 15);
            $table->string('mobile', 15);
            $table->string('email', 150);
            $table->enum('gender', ['Femenino', 'Masculino']);
            $table->text('address');
            $table->integer('region_id')->unsigned();
            $table->text('notes');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::table('patients', function($table) {
            $table->foreign('region_id')->references('id')->on('regions')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patient');
    }
}
