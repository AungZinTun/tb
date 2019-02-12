<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Patient
 *
 * @package App
 * @property string $txt_start_date
 * @property string $tb_no
 * @property string $name
 * @property string $sex
 * @property string $dob
 * @property string $current_address
 * @property string $report_person
 * @property string $health_facility
 * @property string $phone
 * @property string $referred_by
 * @property string $permanent_address
 * @property string $dot_provider
 * @property string $dots_supervisor
 * @property string $contact_person
 * @property string $type_of_patient
 * @property string $tb_site
 * @property string $regimen
 * @property string $smear_result_0
 * @property string $x_pert_result
 * @property integer $culture_result
 * @property integer $dst_h_0
 * @property integer $dst_r_0
 * @property integer $dst_e_0
 * @property integer $lpa_e_0
 * @property integer $lpa_r_0
 * @property integer $weight
 * @property integer $smear_result_2
 * @property integer $xpert_result_2
 * @property integer $culture_result_2
 * @property integer $dst_h_2
 * @property integer $dst_r_2
 * @property integer $dst_s_2
 * @property integer $dst_e_2
 * @property integer $lpa_h_2
 * @property integer $lpa_r_2
 * @property integer $wt_2
 * @property integer $smear_result_5
 * @property integer $xpert_result_5
 * @property integer $culture_result_5
 * @property integer $dst_h_5
 * @property integer $dst_r_5
 * @property integer $dst_s_5
 * @property integer $dst_e_5
 * @property integer $lpa_h_5
 * @property integer $lpa_r_5
 * @property integer $wt_5
 * @property integer $smear_result_e
 * @property integer $xpert_result_e
 * @property integer $culture_result_e
 * @property integer $dst_h_e
 * @property integer $dst_r_e
 * @property integer $dst_s_e
 * @property integer $dst_e_e
 * @property integer $lpa_h_e
 * @property integer $lpa_r_e
 * @property integer $wt_e
 * @property integer $c_regimen
 * @property string $hiv_test_result
 * @property string $hiv_test_date
 * @property string $cpt
 * @property string $art
 * @property string $outcome
*/
class Patient extends Model
{
    use SoftDeletes;

    protected $fillable = ['txt_start_date', 'tb_no', 'name', 'sex', 'dob','age',
     'current_address', 'phone', 'referred_by', 'permanent_address', 'dot_provider',
      'dots_supervisor', 'contact_person', 'type_of_patient', 'tb_site', 'regimen',
       'smear_result_0', 'x_pert_result', 'culture_result', 'dst_h_0', 'dst_r_0', 'dst_e_0', 'lpa_e_0', 'lpa_r_0', 'weight', 
       'smear_result_2', 'xpert_result_2', 'culture_result_2', 'dst_h_2', 'dst_r_2', 'dst_s_2', 'dst_e_2', 'lpa_h_2', 'lpa_r_2', 'wt_2', 
       'smear_result_5', 'xpert_result_5', 'culture_result_5', 'dst_h_5', 'dst_r_5', 'dst_s_5', 'dst_e_5', 'lpa_h_5', 'lpa_r_5', 'wt_5',
        'smear_result_e', 'xpert_result_e', 'culture_result_e', 'dst_h_e', 'dst_r_e', 'dst_s_e', 'dst_e_e', 'lpa_h_e', 'lpa_r_e', 'wt_e', 
        'c_regimen',
         'hiv_test_result', 'hiv_test_date', 'cpt', 'art', 
         'outcome', 
         'report_person_id',
          'health_facility_id'];
    protected $hidden = [];
    
    
    public static function boot()
    {
        parent::boot();

        Patient::observe(new \App\Observers\UserActionsObserver);
    }

    /**
     * Set attribute to date format
     * @param $input
     */
    public function setTxtStartDateAttribute($input)
    {
        if ($input != null && $input != '') {
            $this->attributes['txt_start_date'] = Carbon::createFromFormat(config('app.date_format'), $input)->format('Y-m-d');
        } else {
            $this->attributes['txt_start_date'] = null;
        }
    }

    /**
     * Get attribute from date format
     * @param $input
     *
     * @return string
     */
    public function getTxtStartDateAttribute($input)
    {
        $zeroDate = str_replace(['Y', 'm', 'd'], ['0000', '00', '00'], config('app.date_format'));

        if ($input != $zeroDate && $input != null) {
            return Carbon::createFromFormat('Y-m-d', $input)->format(config('app.date_format'));
        } else {
            return '';
        }
    }

    /**
     * Set attribute to date format
     * @param $input
     */
    public function setDobAttribute($input)
    {
        if ($input != null && $input != '') {
            $this->attributes['dob'] = Carbon::createFromFormat(config('app.date_format'), $input)->format('Y-m-d');
        } else {
            $this->attributes['dob'] = null;
        }
    }

    /**
     * Get attribute from date format
     * @param $input
     *
     * @return string
     */
    public function getDobAttribute($input)
    {
        $zeroDate = str_replace(['Y', 'm', 'd'], ['0000', '00', '00'], config('app.date_format'));

        if ($input != $zeroDate && $input != null) {
            return Carbon::createFromFormat('Y-m-d', $input)->format(config('app.date_format'));
        } else {
            return '';
        }
    }

    /**
     * Set to null if empty
     * @param $input
     */
    public function setReportPersonIdAttribute($input)
    {
        $this->attributes['report_person_id'] = $input ? $input : null;
    }

    /**
     * Set to null if empty
     * @param $input
     */
    public function setHealthFacilityIdAttribute($input)
    {
        $this->attributes['health_facility_id'] = $input ? $input : null;
    }

    /**
     * Set attribute to money format
     * @param $input
     */
    public function setCultureResultAttribute($input)
    {
        $this->attributes['culture_result'] = $input ? $input : null;
    }

    /**
     * Set attribute to money format
     * @param $input
     */
    public function setDstH0Attribute($input)
    {
        $this->attributes['dst_h_0'] = $input ? $input : null;
    }

    /**
     * Set attribute to money format
     * @param $input
     */
    public function setDstR0Attribute($input)
    {
        $this->attributes['dst_r_0'] = $input ? $input : null;
    }

    /**
     * Set attribute to money format
     * @param $input
     */
    public function setDstE0Attribute($input)
    {
        $this->attributes['dst_e_0'] = $input ? $input : null;
    }

    /**
     * Set attribute to money format
     * @param $input
     */
    public function setLpaE0Attribute($input)
    {
        $this->attributes['lpa_e_0'] = $input ? $input : null;
    }

    /**
     * Set attribute to money format
     * @param $input
     */
    public function setLpaR0Attribute($input)
    {
        $this->attributes['lpa_r_0'] = $input ? $input : null;
    }

    /**
     * Set attribute to money format
     * @param $input
     */
    public function setWeightAttribute($input)
    {
        $this->attributes['weight'] = $input ? $input : null;
    }

    /**
     * Set attribute to money format
     * @param $input
     */
    public function setSmearResult2Attribute($input)
    {
        $this->attributes['smear_result_2'] = $input ? $input : null;
    }

    /**
     * Set attribute to money format
     * @param $input
     */
    public function setXpertResult2Attribute($input)
    {
        $this->attributes['xpert_result_2'] = $input ? $input : null;
    }

    /**
     * Set attribute to money format
     * @param $input
     */
    public function setCultureResult2Attribute($input)
    {
        $this->attributes['culture_result_2'] = $input ? $input : null;
    }

    /**
     * Set attribute to money format
     * @param $input
     */
    public function setDstH2Attribute($input)
    {
        $this->attributes['dst_h_2'] = $input ? $input : null;
    }

    /**
     * Set attribute to money format
     * @param $input
     */
    public function setDstR2Attribute($input)
    {
        $this->attributes['dst_r_2'] = $input ? $input : null;
    }

    /**
     * Set attribute to money format
     * @param $input
     */
    public function setDstS2Attribute($input)
    {
        $this->attributes['dst_s_2'] = $input ? $input : null;
    }

    /**
     * Set attribute to money format
     * @param $input
     */
    public function setDstE2Attribute($input)
    {
        $this->attributes['dst_e_2'] = $input ? $input : null;
    }

    /**
     * Set attribute to money format
     * @param $input
     */
    public function setLpaH2Attribute($input)
    {
        $this->attributes['lpa_h_2'] = $input ? $input : null;
    }

    /**
     * Set attribute to money format
     * @param $input
     */
    public function setLpaR2Attribute($input)
    {
        $this->attributes['lpa_r_2'] = $input ? $input : null;
    }

    /**
     * Set attribute to money format
     * @param $input
     */
    public function setWt2Attribute($input)
    {
        $this->attributes['wt_2'] = $input ? $input : null;
    }

    /**
     * Set attribute to money format
     * @param $input
     */
    public function setSmearResult5Attribute($input)
    {
        $this->attributes['smear_result_5'] = $input ? $input : null;
    }

    /**
     * Set attribute to money format
     * @param $input
     */
    public function setXpertResult5Attribute($input)
    {
        $this->attributes['xpert_result_5'] = $input ? $input : null;
    }

    /**
     * Set attribute to money format
     * @param $input
     */
    public function setCultureResult5Attribute($input)
    {
        $this->attributes['culture_result_5'] = $input ? $input : null;
    }

    /**
     * Set attribute to money format
     * @param $input
     */
    public function setDstH5Attribute($input)
    {
        $this->attributes['dst_h_5'] = $input ? $input : null;
    }

    /**
     * Set attribute to money format
     * @param $input
     */
    public function setDstR5Attribute($input)
    {
        $this->attributes['dst_r_5'] = $input ? $input : null;
    }

    /**
     * Set attribute to money format
     * @param $input
     */
    public function setDstS5Attribute($input)
    {
        $this->attributes['dst_s_5'] = $input ? $input : null;
    }

    /**
     * Set attribute to money format
     * @param $input
     */
    public function setDstE5Attribute($input)
    {
        $this->attributes['dst_e_5'] = $input ? $input : null;
    }

    /**
     * Set attribute to money format
     * @param $input
     */
    public function setLpaH5Attribute($input)
    {
        $this->attributes['lpa_h_5'] = $input ? $input : null;
    }

    /**
     * Set attribute to money format
     * @param $input
     */
    public function setLpaR5Attribute($input)
    {
        $this->attributes['lpa_r_5'] = $input ? $input : null;
    }

    /**
     * Set attribute to money format
     * @param $input
     */
    public function setWt5Attribute($input)
    {
        $this->attributes['wt_5'] = $input ? $input : null;
    }

    /**
     * Set attribute to money format
     * @param $input
     */
    public function setSmearResultEAttribute($input)
    {
        $this->attributes['smear_result_e'] = $input ? $input : null;
    }

    /**
     * Set attribute to money format
     * @param $input
     */
    public function setXpertResultEAttribute($input)
    {
        $this->attributes['xpert_result_e'] = $input ? $input : null;
    }

    /**
     * Set attribute to money format
     * @param $input
     */
    public function setCultureResultEAttribute($input)
    {
        $this->attributes['culture_result_e'] = $input ? $input : null;
    }

    /**
     * Set attribute to money format
     * @param $input
     */
    public function setDstHEAttribute($input)
    {
        $this->attributes['dst_h_e'] = $input ? $input : null;
    }

    /**
     * Set attribute to money format
     * @param $input
     */
    public function setDstREAttribute($input)
    {
        $this->attributes['dst_r_e'] = $input ? $input : null;
    }

    /**
     * Set attribute to money format
     * @param $input
     */
    public function setDstSEAttribute($input)
    {
        $this->attributes['dst_s_e'] = $input ? $input : null;
    }

    /**
     * Set attribute to money format
     * @param $input
     */
    public function setDstEEAttribute($input)
    {
        $this->attributes['dst_e_e'] = $input ? $input : null;
    }

    /**
     * Set attribute to money format
     * @param $input
     */
    public function setLpaHEAttribute($input)
    {
        $this->attributes['lpa_h_e'] = $input ? $input : null;
    }

    /**
     * Set attribute to money format
     * @param $input
     */
    public function setLpaREAttribute($input)
    {
        $this->attributes['lpa_r_e'] = $input ? $input : null;
    }

    /**
     * Set attribute to money format
     * @param $input
     */
    public function setWtEAttribute($input)
    {
        $this->attributes['wt_e'] = $input ? $input : null;
    }

    /**
     * Set attribute to money format
     * @param $input
     */
    public function setCRegimenAttribute($input)
    {
        $this->attributes['c_regimen'] = $input ? $input : null;
    }

    /**
     * Set attribute to date format
     * @param $input
     */
    public function setHivTestDateAttribute($input)
    {
        if ($input != null && $input != '') {
            $this->attributes['hiv_test_date'] = Carbon::createFromFormat(config('app.date_format'), $input)->format('Y-m-d');
        } else {
            $this->attributes['hiv_test_date'] = null;
        }
    }

    /**
     * Get attribute from date format
     * @param $input
     *
     * @return string
     */
    public function getHivTestDateAttribute($input)
    {
        $zeroDate = str_replace(['Y', 'm', 'd'], ['0000', '00', '00'], config('app.date_format'));

        if ($input != $zeroDate && $input != null) {
            return Carbon::createFromFormat('Y-m-d', $input)->format(config('app.date_format'));
        } else {
            return '';
        }
    }

    /**
     * Set attribute to date format
     * @param $input
     */
    public function setCptAttribute($input)
    {
        if ($input != null && $input != '') {
            $this->attributes['cpt'] = Carbon::createFromFormat(config('app.date_format'), $input)->format('Y-m-d');
        } else {
            $this->attributes['cpt'] = null;
        }
    }

    /**
     * Get attribute from date format
     * @param $input
     *
     * @return string
     */
    public function getCptAttribute($input)
    {
        $zeroDate = str_replace(['Y', 'm', 'd'], ['0000', '00', '00'], config('app.date_format'));

        if ($input != $zeroDate && $input != null) {
            return Carbon::createFromFormat('Y-m-d', $input)->format(config('app.date_format'));
        } else {
            return '';
        }
    }

    /**
     * Set attribute to date format
     * @param $input
     */
    public function setArtAttribute($input)
    {
        if ($input != null && $input != '') {
            $this->attributes['art'] = Carbon::createFromFormat(config('app.date_format'), $input)->format('Y-m-d');
        } else {
            $this->attributes['art'] = null;
        }
    }

    /**
     * Get attribute from date format
     * @param $input
     *
     * @return string
     */
    public function getArtAttribute($input)
    {
        $zeroDate = str_replace(['Y', 'm', 'd'], ['0000', '00', '00'], config('app.date_format'));

        if ($input != $zeroDate && $input != null) {
            return Carbon::createFromFormat('Y-m-d', $input)->format(config('app.date_format'));
        } else {
            return '';
        }
    }
    
    public function report_person()
    {
        return $this->belongsTo(User::class, 'report_person_id');
    }
    
    public function health_facility()
    {
        return $this->belongsTo(Township::class, 'health_facility_id')->withTrashed();
    }
    
}
