<?php

namespace App\models;

class PcrmProjectsPersonsTypesConnections extends CoreModel
{
    /**
     * The database table used by the model
     *
     * @var string
     */
    protected $table = 'pcrm_projects_persons_types_connections';

    /**
     * Fields which will be manipulated
     */
    protected $fillable = ['id', 'project_id', 'person_id', 'type_id'];

}