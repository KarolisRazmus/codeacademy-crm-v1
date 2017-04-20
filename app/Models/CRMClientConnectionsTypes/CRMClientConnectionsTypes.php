<?php

namespace App\Models\CRMClientConnectionsTypes;

use Illuminate\Database\Eloquent\Model;

class CRMClientConnectionsTypes extends Model
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