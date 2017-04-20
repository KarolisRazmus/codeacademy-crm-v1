<?php

namespace App\Models\CRMProjectLoginTypes;

use Illuminate\Database\Eloquent\Model;

class CRMProjectLoginTypes extends Model
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
