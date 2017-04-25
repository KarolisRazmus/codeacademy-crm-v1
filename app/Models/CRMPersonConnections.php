<?php

namespace App\Models;


class CRMPersonConnections extends CRMCoreModel
{
    /**
     * the database table used by model.
     */
    protected $table = 'crm_person_connections';

    /**
     * the attributes that are mass assignable.
     */
    protected $fillable = [
        'id', 'project_id', 'person_id', 'person_type_id', 'description',
    ];

    protected $hidden = [ 'count' , 'created_at' , 'updated_at' , 'deleted_at' ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function projectId_PersonConnections (  )
    {
        return $this->hasOne(CRMProjects::class, 'id', 'project_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function personId_PersonConnections (  )
    {
        return $this->hasOne(CRMPersons::class, 'id', 'person_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function personTypeId_PersonConnections (  )
    {
        return $this->hasOne(CRMPersonTypes::class, 'id', 'person_type_id');
    }
}
