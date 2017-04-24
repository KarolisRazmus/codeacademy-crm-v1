<?php

namespace App\Models;

class CRMClientConnections extends CRMCoreModel
{
    /**
     * the database table used by model.
     */
    protected $table = 'crm_client_connections';

    /**
     * the attributes that are mass assignable.
     */
    protected $fillable = [
        'id' , 'client_id' , 'person_id' , 'contact_type_id' , 'description' ,
    ];
}
