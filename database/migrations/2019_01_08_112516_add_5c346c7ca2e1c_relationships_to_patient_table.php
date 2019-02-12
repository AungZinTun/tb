<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Add5c346c7ca2e1cRelationshipsToPatientTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('patients', function(Blueprint $table) {
            if (!Schema::hasColumn('patients', 'report_person_id')) {
                $table->integer('report_person_id')->unsigned()->nullable();
                $table->foreign('report_person_id', '250418_5c34694c1315c')->references('id')->on('users')->onDelete('cascade');
                }
                if (!Schema::hasColumn('patients', 'health_facility_id')) {
                $table->integer('health_facility_id')->unsigned()->nullable();
                $table->foreign('health_facility_id', '250418_5c34694c266e4')->references('id')->on('townships')->onDelete('cascade');
                }
                
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('patients', function(Blueprint $table) {
            
        });
    }
}
