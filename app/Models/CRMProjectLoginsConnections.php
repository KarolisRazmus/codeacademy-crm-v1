<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CRMProjectLoginsConnections extends Model
{
    use SoftDeletes;
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