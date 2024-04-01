<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Committee_Model extends Model
{
    use HasFactory;
    protected $table = 'committee';
    protected $primaryKey = 'id';

    protected $fillable = [
        'profileForm_id',
        'category',
        'chairperson_name',
        'chairperson_org',
        'sec_name',
        'sec_org',
        'member_name',
        'member_org',
        'status',
    ];

    public function profileForm()
    {
        return $this->belongsTo(ProfileForm_Model::class, 'id');
    }
    public function isNull()
    {
        return is_null($this->category) ||
               is_null($this->chairperson_name) ||
               is_null($this->chairperson_org) ||
               is_null($this->sec_name) ||
               is_null($this->sec_org) ||
               is_null($this->member_name) ||
               is_null($this->member_org);
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
