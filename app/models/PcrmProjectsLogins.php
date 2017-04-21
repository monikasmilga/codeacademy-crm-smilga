<?php

namespace App\models;


class PcrmProjectsLogins extends CoreModel
{
    /**
     * The database table used by the model
     *
     * @var string
     */
    protected $table = 'pcrm_projects_logins';

    /**
     * Fields which will be manipulated
     */
    protected $fillable = ['id', 'type_id', 'username', 'password', 'login_url'];

}