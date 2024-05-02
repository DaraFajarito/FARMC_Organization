<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FC_GenInfo_Model extends Model
{
    use HasFactory;

    protected $table = 'fc_gen_info';
    protected $primaryKey = 'id';

    protected $fillable = [
        'as_of',
        'name_of_coop',
        'add_barangay',
        'add_city',
        'add_province',
        'sector_rep',
        'sector_rep_yes',
        'CIN',
        'date_of_amend',
        'short_history',

        'RD_ODR_regnum',
        'RD_ODR_regdate',
        'RD_ODR_regfile',

        'RD_RA_regnum',
        'RD_RA_regdate',
        'RD_RA_regfile',

        'RD_memOp',
        'RD_bussOp',
        'RD_categofCoop',
        'RD_typeofCoop',
        'RD_genObj',
        'RD_progpas',

        'RD_SOA_date',
        'RD_SOA_num',
        'RD_categofAccre',
        'status',
    ];
}
