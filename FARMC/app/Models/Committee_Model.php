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
    ];

    public function profileForm()
    {
        return $this->belongsTo(ProfileForm_Model::class, 'id');
    }
}
