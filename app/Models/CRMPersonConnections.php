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

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function project ()
    {
        return $this->hasOne(CRMProjects::class, 'id', 'project_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function person (  )
    {
        return $this->hasOne(CRMPersons::class, 'id', 'person_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function type (  )
    {
        return $this->hasOne(CRMPersonTypes::class, 'id', 'person_type_id');
    }
}
