<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FC_ListofMem_Model extends Model
{
    use HasFactory;

    protected $table = 'fc_list_of_members';

    protected $primaryKey = 'id';

    protected $fillable = [
        'fisherfolkOrg_FC_id',

        'listmem_name',
        'listmem_type',
        'listmem_gen',
        'listmem_cs',
        'listmem_birth',
        'listmem_age',
    ];
}
