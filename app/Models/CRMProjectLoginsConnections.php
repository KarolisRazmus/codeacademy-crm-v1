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
}