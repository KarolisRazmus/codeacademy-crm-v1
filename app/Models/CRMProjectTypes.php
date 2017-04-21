<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CRMProjectTypes extends Model
{
    use SoftDeletes;
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