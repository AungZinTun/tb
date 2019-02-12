<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Update1546940367PatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('patients', function (Blueprint $table) {
            
if (!Schema::hasColumn('patients', 'dst_s_2')) {
                $table->integer('dst_s_2')->nullable();
                }
if (!Schema::hasColumn('patients', 'dst_e_2')) {
                $table->integer('dst_e_2')->nullable();
                }
if (!Schema::hasColumn('patients', 'lpa_h_2')) {
                $table->integer('lpa_h_2')->nullable();
                }
if (!Schema::hasColumn('patients', 'lpa_r_2')) {
                $table->integer('lpa_r_2')->nullable();
                }
if (!Schema::hasColumn('patients', 'wt_2')) {
                $table->integer('wt_2')->nullable();
                }
if (!Schema::hasColumn('patients', 'smear_result_5')) {
                $table->integer('smear_result_5')->nullable();
                }
if (!Schema::hasColumn('patients', 'xpert_result_5')) {
                $table->integer('xpert_result_5')->nullable();
                }
if (!Schema::hasColumn('patients', 'culture_result_5')) {
                $table->integer('culture_result_5')->nullable();
                }
if (!Schema::hasColumn('patients', 'dst_h_5')) {
                $table->integer('dst_h_5')->nullable();
                }
if (!Schema::hasColumn('patients', 'dst_r_5')) {
                $table->integer('dst_r_5')->nullable();
                }
if (!Schema::hasColumn('patients', 'dst_s_5')) {
                $table->integer('dst_s_5')->nullable();
                }
if (!Schema::hasColumn('patients', 'dst_e_5')) {
                $table->integer('dst_e_5')->nullable();
                }
if (!Schema::hasColumn('patients', 'lpa_h_5')) {
                $table->integer('lpa_h_5')->nullable();
                }
if (!Schema::hasColumn('patients', 'lpa_r_5')) {
                $table->integer('lpa_r_5')->nullable();
                }
if (!Schema::hasColumn('patients', 'wt_5')) {
                $table->integer('wt_5')->nullable();
                }
if (!Schema::hasColumn('patients', 'smear_result_e')) {
                $table->integer('smear_result_e')->nullable();
                }
if (!Schema::hasColumn('patients', 'xpert_result_e')) {
                $table->integer('xpert_result_e')->nullable();
                }
if (!Schema::hasColumn('patients', 'culture_result_e')) {
                $table->integer('culture_result_e')->nullable();
                }
if (!Schema::hasColumn('patients', 'dst_h_e')) {
                $table->integer('dst_h_e')->nullable();
                }
if (!Schema::hasColumn('patients', 'dst_r_e')) {
                $table->integer('dst_r_e')->nullable();
                }
if (!Schema::hasColumn('patients', 'dst_s_e')) {
                $table->integer('dst_s_e')->nullable();
                }
if (!Schema::hasColumn('patients', 'dst_e_e')) {
                $table->integer('dst_e_e')->nullable();
                }
if (!Schema::hasColumn('patients', 'lpa_h_e')) {
                $table->integer('lpa_h_e')->nullable();
                }
if (!Schema::hasColumn('patients', 'lpa_r_e')) {
                $table->integer('lpa_r_e')->nullable();
                }
if (!Schema::hasColumn('patients', 'c_regimen')) {
                $table->integer('c_regimen')->nullable();
                }
if (!Schema::hasColumn('patients', 'hiv_test_result')) {
                $table->string('hiv_test_result')->nullable();
                }
if (!Schema::hasColumn('patients', 'hiv_test_date')) {
                $table->date('hiv_test_date')->nullable();
                }
if (!Schema::hasColumn('patients', 'cpt')) {
                $table->date('cpt')->nullable();
                }
if (!Schema::hasColumn('patients', 'art')) {
                $table->date('art')->nullable();
                }
if (!Schema::hasColumn('patients', 'outcome')) {
                $table->string('outcome')->nullable();
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
            $table->dropColumn('dst_s_2');
            $table->dropColumn('dst_e_2');
            $table->dropColumn('lpa_h_2');
            $table->dropColumn('lpa_r_2');
            $table->dropColumn('wt_2');
            $table->dropColumn('smear_result_5');
            $table->dropColumn('xpert_result_5');
            $table->dropColumn('culture_result_5');
            $table->dropColumn('dst_h_5');
            $table->dropColumn('dst_r_5');
            $table->dropColumn('dst_s_5');
            $table->dropColumn('dst_e_5');
            $table->dropColumn('lpa_h_5');
            $table->dropColumn('lpa_r_5');
            $table->dropColumn('wt_5');
            $table->dropColumn('smear_result_e');
            $table->dropColumn('xpert_result_e');
            $table->dropColumn('culture_result_e');
            $table->dropColumn('dst_h_e');
            $table->dropColumn('dst_r_e');
            $table->dropColumn('dst_s_e');
            $table->dropColumn('dst_e_e');
            $table->dropColumn('lpa_h_e');
            $table->dropColumn('lpa_r_e');
            $table->dropColumn('c_regimen');
            $table->dropColumn('hiv_test_result');
            $table->dropColumn('hiv_test_date');
            $table->dropColumn('cpt');
            $table->dropColumn('art');
            $table->dropColumn('outcome');
            
        });

    }
}
