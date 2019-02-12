<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Update1546939514PatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('patients', function (Blueprint $table) {
            
if (!Schema::hasColumn('patients', 'x_pert_result')) {
                $table->string('x_pert_result')->nullable();
                }
if (!Schema::hasColumn('patients', 'culture_result')) {
                $table->integer('culture_result')->nullable()->unsigned();
                }
if (!Schema::hasColumn('patients', 'dst_h_0')) {
                $table->integer('dst_h_0')->nullable()->unsigned();
                }
if (!Schema::hasColumn('patients', 'dst_r_0')) {
                $table->integer('dst_r_0')->nullable()->unsigned();
                }
if (!Schema::hasColumn('patients', 'dst_e_0')) {
                $table->integer('dst_e_0')->nullable();
                }
if (!Schema::hasColumn('patients', 'lpa_e_0')) {
                $table->integer('lpa_e_0')->nullable();
                }
if (!Schema::hasColumn('patients', 'lpa_r_0')) {
                $table->integer('lpa_r_0')->nullable();
                }
if (!Schema::hasColumn('patients', 'weight')) {
                $table->integer('weight')->nullable();
                }
if (!Schema::hasColumn('patients', 'smear_result_2')) {
                $table->integer('smear_result_2')->nullable();
                }
if (!Schema::hasColumn('patients', 'xpert_result_2')) {
                $table->integer('xpert_result_2')->nullable();
                }
if (!Schema::hasColumn('patients', 'culture_result_2')) {
                $table->integer('culture_result_2')->nullable();
                }
if (!Schema::hasColumn('patients', 'dst_h_2')) {
                $table->integer('dst_h_2')->nullable();
                }
if (!Schema::hasColumn('patients', 'dst_r_2')) {
                $table->integer('dst_r_2')->nullable();
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
        Schema::table('patients', function (Blueprint $table) {
            $table->dropColumn('x_pert_result');
            $table->dropColumn('culture_result');
            $table->dropColumn('dst_h_0');
            $table->dropColumn('dst_r_0');
            $table->dropColumn('dst_e_0');
            $table->dropColumn('lpa_e_0');
            $table->dropColumn('lpa_r_0');
            $table->dropColumn('weight');
            $table->dropColumn('smear_result_2');
            $table->dropColumn('xpert_result_2');
            $table->dropColumn('culture_result_2');
            $table->dropColumn('dst_h_2');
            $table->dropColumn('dst_r_2');
            
        });

    }
}
