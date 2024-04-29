<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FO_OAM_BoardofDir_Model extends Model
{
    use HasFactory;
    protected $table = 'fo_oam_boardofdir';
    protected $primaryKey = 'id';

    protected $fillable = [
        'fisherfolkOrg_id',
        'boardofDir_name1',
        'boardofDir_cs1',
        'boardofDir_gen1',
        'boardofDir_age1',
        'boardofDir_birth1',
        'boardofDir_fourps1',

        'boardofDir_name2',
        'boardofDir_cs2',
        'boardofDir_gen2',
        'boardofDir_age2',
        'boardofDir_birth2',
        'boardofDir_fourps2',

        'boardofDir_name3',
        'boardofDir_cs3',
        'boardofDir_gen3',
        'boardofDir_age3',
        'boardofDir_birth3',
        'boardofDir_fourps3',

        'boardofDir_name4',
        'boardofDir_cs4',
        'boardofDir_gen4',
        'boardofDir_age4',
        'boardofDir_birth4',
        'boardofDir_fourps4',

        'boardofDir_name5',
        'boardofDir_cs5',
        'boardofDir_gen5',
        'boardofDir_age5',
        'boardofDir_birth5',
        'boardofDir_fourps5',

        'boardofDir_name6',
        'boardofDir_cs6',
        'boardofDir_gen6',
        'boardofDir_age6',
        'boardofDir_birth6',
        'boardofDir_fourps6',

        'boardofDir_name7',
        'boardofDir_cs7',
        'boardofDir_gen7',
        'boardofDir_age7',
        'boardofDir_birth7',
        'boardofDir_fourps7',

        'boardofDir_name8',
        'boardofDir_cs8',
        'boardofDir_gen8',
        'boardofDir_age8',
        'boardofDir_birth8',
        'boardofDir_fourps8',

        'status',

    ];


}
