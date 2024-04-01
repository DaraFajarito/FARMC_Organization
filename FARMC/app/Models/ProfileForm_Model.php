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
        return is_null($this->municipality) ||
               is_null($this->province) ||
               is_null($this->date_organized) ||
               is_null($this->minutes1) ||
               is_null($this->photos1) ||
               is_null($this->attendance1) ||
               is_null($this->date_reorganized) ||
               is_null($this->minutes2) ||
               is_null($this->photos2) ||
               is_null($this->attendance2) ||
               is_null($this->internalP) ||
               is_null($this->internalP_file) ||
               is_null($this->fisherfolkR) ||
               is_null($this->fisherfolkR_file) ||
               is_null($this->formulationR) ||
               is_null($this->formulationR_file) ||
               is_null($this->chairperson) ||
               is_null($this->vice_chairperson) ||
               is_null($this->secretary) ||
               is_null($this->asst_sec) ||
               is_null($this->treasurer) ||
               is_null($this->asst_treas) ||
               is_null($this->auditor) ||
               is_null($this->asst_aud) ||
               is_null($this->pro1) ||
               is_null($this->pro2) ||
               is_null($this->sgt_arms1) ||
               is_null($this->sgt_arms2) ||
               is_null($this->sgt_arms3) ||
               is_null($this->chairpersonSB) ||
               is_null($this->mpdo) ||
               is_null($this->repmdc) ||
               is_null($this->repda) ||
               is_null($this->repngo) ||
               is_null($this->repps) ||
               is_null($this->others) ||
               is_null($this->name_sec) ||
               is_null($this->name_sec1) ||
               is_null($this->name_sec2) ||
               is_null($this->office_org) ||
               is_null($this->office_org1) ||
               is_null($this->office_org2);
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
