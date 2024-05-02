<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FC_Membership_Model extends Model
{
    use HasFactory;

    protected $table = 'fc_membership';
    protected $primaryKey = 'id';

    protected $fillable = [
        'fisherfolkOrg_FC_id',
        'common_bond',

        'CoM_NRMem_male',
        'NRMem_female',
        'NRMem_total',

        'CoM_NAMem_male',
        'NAMem_female',
        'NAMem_total',

        'CoM_TotalMem_male',
        'TMem_female',
        'TMem_total',

        'CoM_TargetMem_male',
        'TarMem_female',
        'TarMem_total',

        'CoM_Total_male',
        'Total_female',
        'Total_total',

        'NoE_Fulltime_male',
        'Fulltime_female',
        'Fulltime_total',

        'NoE_Parttime_male',
        'Parttime_female',
        'Parttime_total',

        'NoE_Total_male',
        'TotalEmp_female',
        'TotalEmp_total',

        'total_assets',
    ];
}

