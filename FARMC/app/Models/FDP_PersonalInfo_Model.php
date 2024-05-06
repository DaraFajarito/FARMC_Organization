<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FDP_PersonalInfo_Model extends Model
{
    use HasFactory;

    protected $table = 'fdp_personal_info';

    protected $primaryKey = 'id';

    protected $fillable = [
        'fam_name',
        'given_name',
        'mid_name',
        'ext',
        'add_barangay',
        'add_city',
        'add_province',
        'civil_status',
        'gender',
        'birthdate',
        'age',
        'fourps',
        'cul_af',
        'cul_af_yes',
        'birthplace_municipality',
        'birthplace_province',
        'name_spouse',
        'occupation',
        'dependent_male',
        'dependent_female',
        'dependent_others',
        'educational_attainment',
        'tertiary',
        'tesda',
        'others',

        'name_ass',
        'add_ass',
        'officer_ass',
        'officer_ass_yes',
        'reg_agency',
        'reg_agency_others',
        'reg_info_no',
        'reg_info_date',
        'comp_mem',
        'comp_mem_others',
        'type_of_org',
        'name_FARMC',
        'add_FARMC',
        'officer_MFARMC',
        'officer_MFARMC_yes',
        'as_member',
        'as_officer',
        'sector_rep',
        'sector_rep_others',
        'involvement_mdo',
        'year1',
        'year2',
        'year3',
        'year4',
        'photo',
        'status',
    ];
}
