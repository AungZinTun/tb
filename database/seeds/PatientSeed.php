<?php

use Illuminate\Database\Seeder;

class PatientSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
            ['id' => 1, 'name' => 'Patient 3', 'tb_no' => '12/18', 'report_person_id' => 1, 'health_facility_id' => 1, 'phone' => '09456655555', 'current_address' => 'aaaaaaaaaaaa', 'permanent_address' => 'aaaaaaaaaaa', 'sex' => '1', 'dob' => '2019-01-16', 'dot_provider' => 'aaa', 'dots_supervisor' => 'bbb', 'contact_person' => 'bbb', 'referred_by' => 'aaaaa', 'tb_site' => '1', 'type_of_patient' => '1', 'regimen' => '1', 'smear_result_0' => '2', 'x_pert_result' => '1', 'culture_result' => null, 'dst_h_0' => null, 'dst_r_0' => null, 'dst_e_0' => null, 'lpa_e_0' => null, 'lpa_r_0' => null, 'weight' => null, 'smear_result_2' => null, 'xpert_result_2' => null, 'culture_result_2' => null, 'dst_h_2' => null, 'dst_r_2' => null, 'dst_s_2' => null, 'dst_e_2' => null, 'lpa_h_2' => null, 'lpa_r_2' => null, 'wt_2' => null, 'smear_result_5' => null, 'xpert_result_5' => null, 'culture_result_5' => null, 'dst_h_5' => null, 'dst_r_5' => null, 'dst_s_5' => null, 'dst_e_5' => null, 'lpa_h_5' => null, 'lpa_r_5' => null, 'wt_5' => null, 'smear_result_e' => null, 'xpert_result_e' => null, 'culture_result_e' => null, 'dst_h_e' => null, 'dst_r_e' => null, 'dst_s_e' => null, 'dst_e_e' => null, 'lpa_h_e' => null, 'lpa_r_e' => null, 'txt_start_date' => '', 'c_regimen' => null, 'hiv_test_result' => null, 'hiv_test_date' => '', 'cpt' => '', 'art' => '', 'outcome' => '5', 'wt_e' => null,],

        ];

        foreach ($items as $item) {
            \App\Patient::create($item);
        }
    }
}
