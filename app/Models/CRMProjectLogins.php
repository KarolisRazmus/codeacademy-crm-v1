<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CRMProjectLogins extends Model
{
    use SoftDeletes;
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
