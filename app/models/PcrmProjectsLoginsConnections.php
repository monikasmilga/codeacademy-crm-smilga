<?php

namespace App\models;


class PcrmProjectsLoginsConnections extends CoreModel
{
    /**
     * The database table used by the model
     *
     * @var string
     */
    protected $table = 'pcrm_projects_logins_connections';

    /**
     * Fields which will be manipulated
     */
    protected $fillable = ['id', 'project_id', 'login_id'];

}