<?php

namespace App\models;


class PcrmClientsPositions extends CoreModel
{
    /**
     * The database table used by the model
     *
     * @var string
     */
    protected $table = 'pcrm_clients_positions';

    /**
     * Fields which will be manipulated
     */
    protected $fillable = ['id', 'name', 'description'];

}