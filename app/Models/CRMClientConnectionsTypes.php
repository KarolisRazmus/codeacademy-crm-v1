<?php

namespace App\Models;

class CRMClientConnectionsTypes extends CRMCoreModel
{
    /**
     * the database table used by model.
     */
    protected $table = 'crm_client_connections_types';

    /**
     * the attributes that are mass assignable.
     */
    protected $fillable = [
        'id', 'name', 'description',
    ];

}