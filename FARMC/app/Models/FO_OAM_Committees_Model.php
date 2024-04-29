<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FO_OAM_Committees_Model extends Model
{
    use HasFactory;

    protected $table = 'fo_committees';
    protected $primaryKey = 'id';

    protected $fillable = [
        'fisherfolkOrg_id',
        'category',
        'other_cat',
        'name',
        'civil_status',
        'gender',
        'birthday',
        'age',
        'fourps',

        'name1',
        'civil_status1',
        'gender1',
        'birthday1',
        'age1',
        'fourps1',


        'name2',
        'civil_status2',
        'gender2',
        'birthday2',
        'age2',
        'fourps2',
        'status',
    ];

}
