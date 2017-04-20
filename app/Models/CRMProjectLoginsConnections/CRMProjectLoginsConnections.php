<?php

namespace App\Models\CRMProjectLoginsConnections;

use Illuminate\Database\Eloquent\Model;

class CRMProjectLoginsConnections extends Model
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