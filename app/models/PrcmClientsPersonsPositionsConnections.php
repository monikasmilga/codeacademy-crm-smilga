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

    protected $hidden = ['count', 'created_at', 'updated_at', 'deleted_at'];

    public function personalData ()
    {
        return $this->hasOne(PcrmPersons::class, 'id', 'person_id');
    }

    public function clientData ()
    {
        return $this->hasOne(PcrmClients::class, 'id', 'client_id');
    }

    public function typeData()
    {
        return $this->hasOne(PcrmProjectsPersonsTypes::class, 'id', 'type_id');
    }
}