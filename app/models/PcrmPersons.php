<?php

namespace App\models;


class PcrmPersons extends CoreModel
{
    /**
     * The database table used by the model
     *
     * @var string
     */
    protected $table = 'pcrm_persons';

    /**
     * Fields which will be manipulated
     *
     * @var array
     */

    protected $fillable = ['id', 'name', 'email', 'phone'];
}
