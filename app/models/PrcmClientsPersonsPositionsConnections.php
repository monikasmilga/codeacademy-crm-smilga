<?php

namespace App\models;


class PrcmClientsPersonsPositionsConnections extends CoreModel
{
    /**
     * The database table used by the model
     *
     * @var string
     */
    protected $table = 'pcrm_clients_persons_positions_connections';

    /**
     * Fields which will be manipulated
     *
     * @var array
     */
    protected $fillable = ['id', 'client_id', 'person_id', 'position_id', 'description'];

}