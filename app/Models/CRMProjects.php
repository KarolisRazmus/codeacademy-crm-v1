<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CRMProjects extends Model
{
    use SoftDeletes;
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