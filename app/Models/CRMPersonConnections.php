<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CRMPersonConnections extends Model
{
    use SoftDeletes;
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
