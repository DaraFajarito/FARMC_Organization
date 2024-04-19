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
        '4ps',
        'pwd',
        'IP',
        'religion_affiliation',
        'spouse_name',
        'occupation',
        'religion_affiliation',
        'dependent_male',
        'dependent_female',
        'dependent_others',
        'educational_attainment',
        'tertiary',
        'tesda',
        'other_source_of_livelihood',
        
        'farmc_name',
        'farmc_add',
        'mfarmc_officer',
        'inc_officer1',
        'inc_officer2',
        'inc_member1',
        'inc_member2',
        'farmc_rep',
        'sector',
        'lgu_rep',
       
       
        'org_mem_name',
       'add_acc',
       'comp_mem',
       'agency',
       'lgu_accre',
       'reg_no',
       'date',
       'officer_association',
       'position',
       'involvement_mdo',
       'year_elected',
       'photo',
       'status',
    ];
}
