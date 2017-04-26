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
    protected $fillable = ['id', 'name', 'type'];

    protected $hidden = ['count', 'created_at', 'deleted_at', 'updated_at'];

//    protected $appends = ['is_company'];

//    protected $with = ['projects', 'personal'];

    public function projects()
    {
        return $this->hasMany(PcrmProjects::class, 'client_id', 'id')->where('name');
    }

    public function personal()
    {
        return $this->hasMany(PrcmClientsPersonsPositionsConnections::class, 'client_id', 'id')->with('personalData');
    }

    public function getProjectsAttribute()
    {
        return PcrmProjects::where('client_id', '=', $this->id)->get();
    }

  /*
    public function getIsCompanyAttribute()
    {
      return $this->type == "J";
    }
*/

}
