<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PcrmPersons extends Model
{
    use SoftDeletes;
    protected $table = 'pcrm_persons';

    /**
     * Fields which will be manipulated
     *
     */


    protected $fillable = ['id', 'name', 'email', 'phone'];
}
