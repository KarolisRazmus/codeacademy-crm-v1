<?php

namespace App\Models;

class CRMClients extends CRMCoreModel
{
    /**
     * the database table used by model.
     */
    protected $table = 'crm_clients';

    /**
     * the attributes that are mass assignable.
     */
    protected $fillable = [ 'id' , 'name' , 'client_type' ];

    protected $appends = ['is_company'];

//    protected $with = ['projects', 'responsible_person'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function projects (  )
    {
        return $this->hasMany(CRMProjects::class, 'client_id', 'id');
    }

    /**
     * @return mixed
     */
    public function responsible_person (  )
    {
        return $this->hasMany(CRMClientConnections::class, 'client_id', 'id')->with('personId_ClientConnections');
    }

    /**
     * @return bool
     */
    public function getIsCompanyAttribute (  )
    {
        return $this->client_type == 'J';
    }
}