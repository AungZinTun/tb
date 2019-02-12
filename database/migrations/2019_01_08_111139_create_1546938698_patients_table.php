<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Create1546938698PatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(! Schema::hasTable('patients')) {
            Schema::create('patients', function (Blueprint $table) {
                $table->increments('id');
                $table->string('name')->nullable();
                $table->string('tb_no')->nullable();
                $table->string('phone')->nullable();
                $table->string('current_address')->nullable();
                $table->string('permanent_address')->nullable();
                $table->string('sex')->nullable();
                $table->date('dob')->nullable();
                $table->string('dot_provider')->nullable();
                $table->string('dots_supervisor')->nullable();
                $table->string('contact_person')->nullable();
                $table->string('referred_by')->nullable();
                $table->string('tb_site')->nullable();
                $table->string('type_of_patient')->nullable();
                $table->string('regimen')->nullable();
                $table->string('smear_result_0')->nullable();
                $table->timestamps();
                $table->softDeletes();

                $table->index(['deleted_at']);
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patients');
    }
}
