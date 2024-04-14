<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fully_Operational_Model extends Model
{
    use HasFactory;

    protected $table = 'fully_functional';
    protected $primaryKey = 'id';

    protected $fillable = [
        'profileForm_id',
        'approved_MFDP_file',
        'imp_act1',
        'imp_act1_file',
        'imp_act2',
        'imp_act2_file',
        'imp_act3',
        'imp_act3_file',
        'pol_prop1',
        'pol_prop1_file',
        'pol_prop2',
        'pol_prop2_file',
        'pol_prop3',
        'pol_prop3_file',
        'rec_act1',
        'rec_act1_file',
        'rec_act2',
        'rec_act2_file',
        'rec_act3',
        'rec_act3_file',
        'rec_iss1',
        'rec_iss1_file',
        'rec_iss2',
        'rec_iss2_file',
        'rec_iss3',
        'rec_iss3_file',
        'part_act1',
        'part_act1_file',
        'part_act2',
        'part_act2_file',
        'part_act3',
        'part_act3_file',
        'part_LGU1',
        'part_LGU1_file',
        'part_LGU2',
        'part_LGU2_file',
        'part_LGU3',
        'part_LGU3_file',
        'name_com',
        'sched_regmeet',
        'sched_regmeet_file',
        'wor_act1',
        'wor_act1_file',
        'wor_act2',
        'wor_act2_file',
        'wor_act3',
        'wor_act3_file',
        'status',
    ];

    protected $casts = [
        // Define casts for boolean fields if needed
    ];

    public function profileForm()
    {
        return $this->belongsTo(ProfileForm_Model::class, 'profileForm_id');
    }

    public function getNullFields()
    {
        return collect($this->toArray())
            ->filter(function ($value, $key) {
                return $value === null;
            })
            ->keys()
            ->toArray();
    }

    public function hasNullValues()
    {
        // Get all columns except the excluded assistant fields
        $columnsToCheck = array_diff($this->getConnection()->getSchemaBuilder()->getColumnListing($this->getTable()));

        // Query the database to check if all fields are null
        $query = $this->select($columnsToCheck)
            ->where(function ($query) use ($columnsToCheck) {
                foreach ($columnsToCheck as $column) {
                    $query->whereNull($column);
                }
            })
            ->first();

        // If the query returns null, all fields except the assistants are null
        return $query === null;
    }
}
