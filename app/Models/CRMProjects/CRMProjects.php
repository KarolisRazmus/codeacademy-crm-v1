<?php

namespace App\Models\CRMProjects;

use Illuminate\Database\Eloquent\Model;

class CRMProjects extends Model
{
    /**
     * the database table used by model.
     */
    protected $table = 'crm_projects';

    /**
     * the attributes that are mass assignable.
     */
    protected $fillable = [
        'id', 'client_id', 'project_type_id', 'name', 'description',
    ];
}