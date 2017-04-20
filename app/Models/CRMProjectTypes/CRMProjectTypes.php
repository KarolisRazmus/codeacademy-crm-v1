<?php

namespace App\Models\CRMProjectTypes;

use Illuminate\Database\Eloquent\Model;

class CRMProjectTypes extends Model
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