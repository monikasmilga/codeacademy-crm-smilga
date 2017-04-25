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

    protected $hidden = ['count', 'created_at', 'updated_at', 'deleted_at', 'project_id', 'login_id'];

    public function projectData()
    {
        return $this->hasOne(PcrmProjects::class, 'id', 'project_id');
    }

    public function loginData()
    {
        return $this->hasOne(PcrmProjectsLogins::class, 'id', 'login_id');
    }
}
