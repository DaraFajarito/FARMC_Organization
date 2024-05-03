<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FC_Officers_Commit_Model extends Model
{
    use HasFactory;

    protected $table = 'fc_officers_commit';

    protected $primaryKey = 'id';

    protected $fillable = [
        'fisherfolkOrg_FC_id',
        'category',
        'other_cat',
        'chairman_name',
        'chair_cs',
        'chair_gen',
        'chair_birth',
        'chair_age',

        'sec_name',
        'sec_cs',
        'sec_gen',
        'sec_birth',
        'sec_age',

        'mem_name',
        'mem_cs',
        'mem_gen',
        'mem_birth',
        'mem_age',
    ];

}
