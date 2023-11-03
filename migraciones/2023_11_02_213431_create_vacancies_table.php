<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
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
        Schema::create('vacancies', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('num_vacancie');
            $table->string('months_experience',70);
            $table->string('country',45);
            $table->float('salary',20,2);
            $table->date('star_date');
            $table->date('closing_date');
            $table->unsignedInteger('id_salary');
            $table->unsignedInteger('id_contract');
            $table->unsignedInteger('id_charge');
            $table->unsignedInteger('id_workig_day');
            $table->unsignedInteger('id_enterprise');
            $table->unsignedInteger('id_departament');
            $table->unsignedInteger('id_municipaly');
            $table->unsignedInteger('id_recruiter');
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
        Schema::dropIfExists('vacancies');
    }
};
