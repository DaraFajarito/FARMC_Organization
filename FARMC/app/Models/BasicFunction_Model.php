<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BasicFunction_Model extends Model
{
    use HasFactory;

    protected $table = 'basic_function';
    protected $primaryKey = 'id';


    protected $fillable = [
        'profileForm_id',
        'mfdp',
        'copy1_file',
        'mindoc1_file',
        'mfo',
        'copy2_file',
        'mindoc2_file',
        'bantaydt',
        'bantaydt_file',
        'actfarmcbt',
        'actfarmcbt_file',
        'appfarmcbt',
        'appfarmcbt_file',
        'caseestablished',
        'caseestablished_file',
        'mfarmcoffice',
        'copy3_file',
        'regmeet',
        'minatt_file',
        'photodoc_file',
        'status',
    ];

    protected $casts = [
        'bantaydt' => 'boolean',
        'actfarmcbt' => 'boolean',
        'appfarmcbt' => 'boolean',
        'caseestablished' => 'boolean',
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
        $excludedFields = ['copy3_file', 'minatt_file', 'photodoc_file'];
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
  
}

