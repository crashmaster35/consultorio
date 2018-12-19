<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 50)->index();
            $table->string('last_name', 50)->index();
            $table->string('mothers_name', 50)->index()->nullable();
            $table->string('email', 200);
            $table->date('birthdate');
            $table->enum('gender', ['Hombre', 'Mujer']);
            $table->enum('civil_state', ['Soltero(a)', 'Casado(a)', 'Viudo(a)', 'Divorciado(a)', 'Union Libre']);
            $table->string('street', 100);
            $table->string('number', 20);
            $table->integer('region_id')->unsigned();
            $table->string('home_phone', 30)->index()->nullable();
            $table->string('office_phone', 30)->index()->nullable();
            $table->string('other_phone', 30)->index()->nullable();
            $table->string('mobile_phone', 30)->index()->nullable();
            $table->string('job_position', 200)->nullable();
            $table->string('company_name', 250)->nullable();
            $table->string('company_email', 200)->nullable();
            $table->boolean('send_email', true)->nullable();
            $table->boolean('send_company_email', true)->nullable();
            $table->enum('known_us', ['Recomendación de Amigo', 'Recomendación de Paciente', 'TV', 'Radio', 'Facebook', 'Twitter', 'Google'])->nullable();
            $table->string('known_us_specific', 255)->nullable();
            $table->boolean('spouse', false)->nullable();
            $table->unsignedInteger('spouse_client_id')->nullable();
            $table->enum('tutor', ['Padre', 'Madre', 'Abuelos', 'Tutor'])->nullable();
            $table->string('tutor_complete_name', 250)->nullable();
            $table->string('familiar_doctor', 250)->nullable();
            $table->string('previous_dentist_name', 250)->nullable();
            $table->string('previous_dentist_phone', 100)->nullable();
            $table->enum('state', ['Prospecto', 'Cliente', 'Negado']);
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
        Schema::dropIfExists('clients');
    }
}
