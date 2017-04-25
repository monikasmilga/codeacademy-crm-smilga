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

    protected $hidden = ['count', 'created_at', 'updated_at', 'deleted_at'];

    public function typeData ()
    {
        return $this->hasOne(PcrmProjectsLoginsTypes::class, 'id', 'type_id');
    }
}