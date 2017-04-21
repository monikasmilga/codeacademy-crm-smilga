<?php

namespace App\models;


class PcrmProjects extends CoreModel
{
    /**
     * Table which will be used by the model
     *
     * @var string
     */
    protected $table = 'pcrm_projects';

    /**
     * Fields which will be manipulated
     *
     * @var array
     */
    protected $fillable = ['id', 'client_id', 'type_id', 'name', 'description'];

}