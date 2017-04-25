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

    protected $hidden = ['count', 'created_at', 'deleted_at', 'updated_at'];

    //protected $with = ['people'];

    public function people()
    {
        //return $this->hasMany()
    }
}
