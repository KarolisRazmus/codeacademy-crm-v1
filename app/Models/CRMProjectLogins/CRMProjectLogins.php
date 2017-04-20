<?php

namespace App\Models\CRMProjectLogins;

use Illuminate\Database\Eloquent\Model;

class CRMProjectLogins extends Model
{
    /**
     * the database table used by model.
     */
    protected $table = 'crm_project_logins';

    /**
     * the attributes that are mass assignable.
     */
    protected $fillable = [
        'id', 'user', 'password', 'login_url',
    ];
}
