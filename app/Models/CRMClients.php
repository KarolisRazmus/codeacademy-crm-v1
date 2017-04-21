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
    protected $fillable = [
        'id', 'name',
    ];
}