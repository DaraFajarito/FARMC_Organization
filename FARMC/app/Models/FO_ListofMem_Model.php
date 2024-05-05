<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FO_ListofMem_Model extends Model
{
    use HasFactory;

    protected $table = 'fo_list_of_members';
    protected $primaryKey = 'id';

    protected $fillable = [
        'fisherfolkOrg_id',
        'mem_name',
        'mem_cs',
        'mem_gen',
        'mem_birth',
        'mem_age',
        'mem_fourps',
    ];

    public function association()
    {
        return $this->belongsTo(FisherfolkOrganization_Model::class, 'fisherfolkOrg_id');
    }
}
