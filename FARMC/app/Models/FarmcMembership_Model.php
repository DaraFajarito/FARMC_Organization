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
        'address',
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
        'IP',
        'name_spouse',
        'occupation',
        'religion',
        'dependent_male',
        'dependent_female',
        'dependent_others',
        'educational_attainment',
        'tertiary',
        'tesda',
        'other_source',

        'farmc_name',
        'farmc_add',
        'mfarmc_off',
        'inc_officer1',
        'inc_officer2',
        'inc_member1',
        'inc_member2',
        'farmc_rep',
        'sect',
        'LGU_rep',


        'org_mem_name',
        'add_acc',
        'comp_mem',
        'reg_ass',
        'lgu_accre',
        'reg_no',
        'date',
        'officer_ass',
        'position',
        'involvement_mdo',
        'year_el',
        'photo',
        'status',
    ];
}
