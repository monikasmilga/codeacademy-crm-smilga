<?php

namespace App\models;


class PcrmProjectsLoginsTypes extends CoreModel
{
    /**
     * The database table used by the model
     *
     * @var string
     */
    protected $table = 'pcrm_projects_logins_types';

    /**
     * Fields which will be manipulated
     */
    protected $fillable = ['id', 'name', 'description'];

}