<?php

namespace App\Models;

class CRMProjectLoginTypes extends CRMCoreModel
{
    /**
     * the database table used by model.
     */
    protected $table = 'crm_project_login_types';

    /**
     * the attributes that are mass assignable.
     */
    protected $fillable = [
        'id', 'login_id', 'description',
    ];

}
