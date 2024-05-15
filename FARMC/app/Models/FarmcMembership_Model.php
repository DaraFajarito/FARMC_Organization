<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FarmcMembership_Model extends Model
{
    use HasFactory;
    protected $table = 'farmc_membership';
    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'barangay',
        'city',
        'province',
        'landline_no',
        'mobile_no',
        'email',
        'civil_status',
        'gender',
        'birthdate',
        'age',
        'birthplace_municipality',
        'birthplace_province',
        'fourps',
        'pwd',
        'pwd_yes',
        'IP',
        'IP_yes',
        'name_spouse',
        'occupation',
        'religion',
        'religion_christ',
        'dependent_male',
        'dependent_female',
        'dependent_others',
        'educational_attainment',
        'tertiary',
        'tesda',
        'other_source',
        'other_source_other',

        'farmc_name',
        'farmc_add',
        'mfarmc_off',
        'mfarmc_off_yes',
        'inc_officer1',
        'inc_officer2',
        'inc_member1',
        'inc_member2',
        'farmc_rep',
        'sect',
        'sect_other',
        'LGU_rep',
        'LGU_rep_other',

        'org_mem_name',
        'add_acc',
        'comp_mem',
        'reg_ass',
        'reg_ass_yes',
        'lgu_accre',
        'reg_no',
        'date',
        'officer_ass',
        'position',
        'involvement_mdo',
        'year1',
        'year2',
        'year3',
        'photo',
        'status',

    ];
}
