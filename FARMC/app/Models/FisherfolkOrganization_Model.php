<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FisherfolkOrganization_Model extends Model
{
    use HasFactory;

    protected $table = 'fisherfolk_municipal_ass';
    protected $primaryKey = 'id';


    protected $fillable = [
        'as_of',
        'name_of_org',
        'add_barangay',
        'add_city',
        'add_province',
        'sector_rep',
        'sector_rep_yes',
        'status_of_reg',
        'status_of_reg_yes',
        'reg_no',
        'date_reg',
        'status_of_accre',
        'status_of_accre_yes',
        'accre_no',
        'date_accre',

        'OAM_EO_Chair_name',
        'chair_cs',
        'chair_gen',
        'chair_birth',
        'chair_age',
        'chair_fourps',

        'OAM_EO_Vicechair_name',
        'vicechair_cs',
        'vicechair_gen',
        'vicechair_birth',
        'vicechair_age',
        'vicechair_fourps',

        'OAM_EO_Sec_name',
        'sec_cs',
        'sec_gen',
        'sec_birth',
        'sec_age',
        'sec_fourps',

        'OAM_EO_Treas_name',
        'treas_cs',
        'treas_gen',
        'treas_birth',
        'treas_age',
        'treas_fourps',

        'OAM_EO_Aud_name',
        'aud_cs',
        'aud_gen',
        'aud_birth',
        'aud_age',
        'aud_fourps',

        'OAM_EO_PRO_name',
        'pro_cs',
        'pro_gen',
        'pro_birth',
        'pro_age',
        'pro_fourps',

        'OAM_EO_Sgt_name',
        'sgt_cs',
        'sgt_gen',
        'sgt_birth',
        'sgt_age',
        'sgt_fourps',

        'OAM_EO_Other_name',
        'other_cs',
        'other_gen',
        'other_birth',
        'other_age',
        'other_fourps',

        'capmem_fee',
        'capmonthly_cont',
        'cap_donation',
        'cap_others',
        'captotal_cap',
        'CIcontact_person',
        'CIlandline',
        'CIMobile',
        'CIMess',
        'status',

    ];

    // public function boardOfDirectors()
    // {
    //     return $this->hasMany(FO_OAM_BoardofDir_Model::class, 'fisherfolkOrg_id');
    // }

    // public function committees()
    // {
    //     return $this->hasMany(FO_OAM_Committees_Model::class, 'fisherfolkOrg_id');
    // }

    // public function listofMembers()
    // {
    //     return $this->hasMany(FO_ListofMem_Model::class, 'fisherfolkOrg_id');
    // }
}
