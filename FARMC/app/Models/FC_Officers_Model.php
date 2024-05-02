<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FC_Officers_Model extends Model
{
    use HasFactory;

    protected $table = 'fc_officers';

    protected $primaryKey = 'id';

    protected $fillable = [
        'fisherfolkOrg_FC_id',
        'BoardofDir_name1',
        'cs1',
        'gen1',
        'birth1',
        'age1',

        'Chairperson_name2',
        'cs2',
        'gen2',
        'birth2',
        'age2',

        'Vchair_name3',
        'cs3',
        'gen3',
        'birth3',
        'age3',

        'BM_name4',
        'cs4',
        'gen4',
        'birth4',
        'age4',

        'BM_name5',
        'cs5',
        'gen5',
        'birth5',
        'age5',

        'BM_name6',
        'cs6',
        'gen6',
        'birth6',
        'age6',

        'BM_name7',
        'cs7',
        'gen7',
        'birth7',
        'age7',

        'BM_name8',
        'cs8',
        'gen8',
        'birth8',
        'age8',

        'BM_name9',
        'cs9',
        'gen9',
        'birth9',
        'age9',

        'BM_name10',
        'cs10',
        'gen10',
        'birth10',
        'age10',

        'Gen_Man_name11',
        'cs11',
        'gen11',
        'birth11',
        'age11',

        'Sec_name12',
        'cs12',
        'gen12',
        'birth12',
        'age12',

        'Treas_name13',
        'cs13',
        'gen13',
        'birth13',
        'age13',
    ];
}
