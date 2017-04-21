<?php

namespace App\Models;

class CRMProjectTypes extends CRMCoreModel
{
    /**
     * the database table used by model.
     */
    protected $table = 'crm_project_types';

    /**
     * the attributes that are mass assignable.
     */
    protected $fillable = [
        'id', 'name', 'description',
    ];
}