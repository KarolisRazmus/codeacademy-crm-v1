<?php

namespace App\Models;

class CRMProjects extends CRMCoreModel
{
    /**
     * the database table used by model.
     */
    protected $table = 'crm_projects';

    /**
     * the attributes that are mass assignable.
     */
    protected $fillable = [
        'id', 'client_id', 'project_type_id', 'name', 'description',
    ];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function client ()
    {
        return $this->hasOne(CRMClients::class, 'id', 'client_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function type (  )
    {
        return $this->hasOne(CRMProjectTypes::class, 'id', 'project_type_id');
    }

    public function totalPersons ()
    {
        return $this->hasMany(CRMPersonConnections::class, 'project_id', 'id');
    }
}