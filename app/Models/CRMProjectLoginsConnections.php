<?php

namespace App\Models;

class CRMProjectLoginsConnections extends CRMCoreModel
{
    /**
     * the database table used by model.
     */
    protected $table = 'crm_project_logins_connections';

    /**
     * the attributes that are mass assignable.
     */
    protected $fillable = [
        'id', 'project_id', 'logins_id',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function projectId_LoginsConnections (  )
    {
        return $this->hasOne(CRMProjects::class, 'id', 'project_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function loginsId_LoginsConnections (  )
    {
        return $this->hasOne(CRMProjectLogins::class, 'id', 'logins_id');
    }
}