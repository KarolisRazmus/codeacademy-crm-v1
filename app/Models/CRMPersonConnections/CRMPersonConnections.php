<?php

namespace App\Models\CRMPersonConnections;

use Illuminate\Database\Eloquent\Model;

class CRMPersonConnections extends Model
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
}
