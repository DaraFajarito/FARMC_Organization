<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Model_of_Excellence_Model extends Model
{
    use HasFactory;
    
    protected $table = 'model_excellence';
    protected $primaryKey = 'id';

    protected $fillable = [
        'profileForm_id',
        'rec_list1',
        'rec_list2',
        'rec_list3',
        'rec_attach_file',
        'award_plaq1',
        'award_plaq1_file',
        'award_plaq2',
        'award_plaq2_file',
        'award_plaq3',
        'award_plaq3_file',
        'award_cert1',
        'award_cert1_file',
        'award_cert2',
        'award_cert2_file',
        'award_cert3',
        'award_cert3_file',
        'award_proj1',
        'award_proj1_file',
        'award_proj2',
        'award_proj2_file',
        'award_proj3',
        'award_proj3_file',
        'award_trop1',
        'award_trop1_file',
        'award_trop2',
        'award_trop2_file',
        'award_trop3',
        'award_trop3_file',
        'iec_broch',
        'iec_broch_file',
        'iec_hand',
        'iec_hand_file',
        'iec_pub',
        'iec_pub_file',
        'iec_AVP',
        'iec_AVP_file',
        'status',
    ];

    protected $casts = [
        'iec_broch' => 'boolean',
        'iec_hand' => 'boolean',
        'iec_pub' => 'boolean',
        'iec_AVP' => 'boolean',
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
