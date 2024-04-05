<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfileForm_Model extends Model
{
    use HasFactory;
    protected $table = 'profile_form';
    protected $primaryKey = 'id';

    protected $fillable = [
        'municipality',
        'province',
        'date_organized',
        'minutes1',
        'photos1',
        'attendance1',
        'date_reorganized',
        'minutes2',
        'photos2',
        'attendance2',
        'internalP',
        'internalP_file',
        'fisherfolkR',
        'fisherfolkR_file',
        'fisheriesP',
        'fisheriesP_file',
        'formulationR',
        'formulationR_file',
        'chairperson',
        'vice_chairperson',
        'secretary',
        'asst_sec',
        'treasurer',
        'asst_treas',
        'auditor',
        'asst_aud',
        'pro1',
        'pro2',
        'sgt_arms1',
        'sgt_arms2',
        'sgt_arms3',
        //mandated
        'chairpersonSB',
        'mpdo',
        'repmdc',
        'repda',
        'repngo',
        'repps',
        'others',
        'name_sec',
        'name_sec1',
        'name_sec2',
        'office_org',
        'office_org1',
        'office_org2',
        'status',
    ];

    protected $casts = [
        'date_organized' => 'date',
        'date_reorganized' => 'date',
        'internalP' => 'boolean',
        'fisherfolkR' => 'boolean',
        'fisheriesP' => 'boolean',
        'formulationR' => 'boolean',
    ];

    public function fisherfolks()
    {
        return $this->hasMany(FisherfolkRepresentative_Model::class, 'profileForm_id');
    }
    public function committee()
    {
        return $this->hasMany(Committee_Model::class, 'profileForm_id');
    }
    public function hasNullValues()
    {
        // Get all columns except the excluded assistant fields
        $excludedFields = ['asst_sec', 'asst_treas', 'asst_aud'];
        $columnsToCheck = array_diff($this->getConnection()->getSchemaBuilder()->getColumnListing($this->getTable()), $excludedFields);

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
    public function getNullFields()
    {
        return collect($this->toArray())
            ->filter(function ($value, $key) {
                return $value === null;
            })
            ->keys()
            ->toArray();
    }
}
