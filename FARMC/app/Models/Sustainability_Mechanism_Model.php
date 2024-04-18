<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sustainability_Mechanism_Model extends Model
{
    use HasFactory;
    protected $table = 'sustainability_mechanism';
    protected $primaryKey = 'id';

    protected $fillable = [
        'profileForm_id',
        'data_training',
        'data_fishcatch',
        'data_regforms',
        'est_funds',
        'est_funds_file',
        'othersources1',
        'othersources1_file',
        'othersources2',
        'othersources2_file',
        'othersources3',
        'othersources3_file',
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
    // Get all columns of the table
    $columns = $this->getConnection()->getSchemaBuilder()->getColumnListing($this->getTable());

    // Query the database to check if any field is null
    $query = $this->where(function ($query) use ($columns) {
        foreach ($columns as $column) {
            $query->orWhereNull($column);
        }
    })->first();

    // If the query returns null, all fields are null
    return $query !== null;
}


    
}
