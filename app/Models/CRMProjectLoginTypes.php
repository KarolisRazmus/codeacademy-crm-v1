<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CRMProjectLoginTypes extends Model
{
    use SoftDeletes;
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
