<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FisherfolkRepresentative_Model extends Model
{
    use HasFactory;

    protected $table = 'fisherfolk_rep';
    protected $primaryKey = 'id';

    protected $fillable = [
        'profileForm_id',
        'category',
        'name',
        'endorsement_fisherfolk',
        'endorsement_attachment',
        'atleast_one_year',
        'aoy_attachment',
        'source_of_income',
        'soi_attachment',
        'good_moral',
        'gmc_attachment',
        'org_name',
        'date_of_reg',
        'date_of_accreditation',
        'dor_file',
        'doa_file',
        'status'
    ];

    protected $casts = [
        'endorsement_fisherfolk' => 'boolean',
        'atleast_one_year' => 'boolean',
        'source_of_income' => 'boolean',
        'good_moral' => 'boolean'
    ];

    public function profileForm()
    {
        return $this->belongsTo(ProfileForm_Model::class, 'id');
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
