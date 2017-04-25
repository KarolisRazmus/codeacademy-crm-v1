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

    protected $hidden = [ 'count' , 'created_at' , 'updated_at' , 'deleted_at' ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function clientId_Projects ()
    {
        return $this->hasOne(CRMClients::class, 'id', 'client_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function projectTypeId_Projects (  )
    {
        return $this->hasOne(CRMProjectTypes::class, 'id', 'project_type_id');
    }
}