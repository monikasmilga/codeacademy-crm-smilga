<?php

namespace App\models;


class PcrmClients extends CoreModel
{
    /**
     * The database table used by the model
     *
     * @var string
     */
    protected $table = 'pcrm_clients';

    /**
     * Fields which will be manipulated
     */
    protected $fillable = ['id ', 'name', 'type'];
}