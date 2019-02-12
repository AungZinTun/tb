<?php
namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class StorePatientsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'txt_start_date' => 'nullable|date_format:'.config('app.date_format'),
            'tb_no' => 'required',
            'dob' => 'required|date_format:'.config('app.date_format'),
            'report_person_id' => 'required',
            'health_facility_id' => 'required',
            'phone' => 'required',
            'culture_result' => 'max:2147483647|nullable|numeric',
            'dst_h_0' => 'max:2147483647|nullable|numeric',
            'dst_r_0' => 'max:2147483647|nullable|numeric',
            'dst_e_0' => 'max:2147483647|nullable|numeric',
            'lpa_e_0' => 'max:2147483647|nullable|numeric',
            'lpa_r_0' => 'max:2147483647|nullable|numeric',
            'weight' => 'max:2147483647|nullable|numeric',
            'smear_result_2' => 'max:2147483647|nullable|numeric',
            'xpert_result_2' => 'max:2147483647|nullable|numeric',
            'culture_result_2' => 'max:2147483647|nullable|numeric',
            'dst_h_2' => 'max:2147483647|nullable|numeric',
            'dst_r_2' => 'max:2147483647|nullable|numeric',
            'dst_s_2' => 'max:2147483647|nullable|numeric',
            'dst_e_2' => 'max:2147483647|nullable|numeric',
            'lpa_h_2' => 'max:2147483647|nullable|numeric',
            'lpa_r_2' => 'max:2147483647|nullable|numeric',
            'wt_2' => 'max:2147483647|nullable|numeric',
            'smear_result_5' => 'max:2147483647|nullable|numeric',
            'xpert_result_5' => 'max:2147483647|nullable|numeric',
            'culture_result_5' => 'max:2147483647|nullable|numeric',
            'dst_h_5' => 'max:2147483647|nullable|numeric',
            'dst_r_5' => 'max:2147483647|nullable|numeric',
            'dst_s_5' => 'max:2147483647|nullable|numeric',
            'dst_e_5' => 'max:2147483647|nullable|numeric',
            'lpa_h_5' => 'max:2147483647|nullable|numeric',
            'lpa_r_5' => 'max:2147483647|nullable|numeric',
            'wt_5' => 'max:2147483647|nullable|numeric',
            'smear_result_e' => 'max:2147483647|nullable|numeric',
            'xpert_result_e' => 'max:2147483647|nullable|numeric',
            'culture_result_e' => 'max:2147483647|nullable|numeric',
            'dst_h_e' => 'max:2147483647|nullable|numeric',
            'dst_r_e' => 'max:2147483647|nullable|numeric',
            'dst_s_e' => 'max:2147483647|nullable|numeric',
            'dst_e_e' => 'max:2147483647|nullable|numeric',
            'lpa_h_e' => 'max:2147483647|nullable|numeric',
            'lpa_r_e' => 'max:2147483647|nullable|numeric',
            'wt_e' => 'max:2147483647|nullable|numeric',
            'c_regimen' => 'max:2147483647|nullable|numeric',
            'hiv_test_date' => 'nullable|date_format:'.config('app.date_format'),
            'cpt' => 'nullable|date_format:'.config('app.date_format'),
            'art' => 'nullable|date_format:'.config('app.date_format'),
        ];
    }
}
