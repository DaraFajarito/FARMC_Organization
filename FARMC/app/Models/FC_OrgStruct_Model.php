<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FC_OrgStruct_Model extends Model
{
    use HasFactory;

    protected $table = 'fc_orgstruct';

    protected $primaryKey = 'id';

    protected $fillable = [

        'fisherfolkOrg_FC_id',
        'orgstruct_file',
        'CD_name',
        'CD_design',
        'CD_tell',
        'CD_email',
        'CD_FBacc',

    ];
}
