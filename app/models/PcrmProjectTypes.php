<?php

namespace App\models;


class PcrmProjectTypes extends CoreModel
{
    /**
     * The database table used by the model
     *
     * @var string
     */
    protected $table = 'pcrm_project_types';

    /**
     * Fields which will be manipulated
     */

    protected $fillable = ['id', 'name', 'description' ];
}