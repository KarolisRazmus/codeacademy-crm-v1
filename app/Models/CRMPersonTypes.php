<?php

namespace App\Models;

class CRMPersonTypes extends CRMCoreModel
{
    /**
     * the database table used by model.
     */
    protected $table = 'crm_person_types';

    /**
     * the attributes that are mass assignable.
     */
    protected $fillable = [
        'id', 'name', 'description',
    ];

}
