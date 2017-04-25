<?php

namespace App\Models;

class CRMProjectLoginTypes extends CRMCoreModel
{
    /**
     * the database table used by model.
     */
    protected $table = 'crm_project_login_types';

    /**
     * the attributes that are mass assignable.
     */
    protected $fillable = [
        'id', 'login_id', 'name', 'description',
    ];

    protected $hidden = [ 'count' , 'created_at' , 'updated_at' , 'deleted_at' ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function loginId_ProjectLoginTypes (  )
    {
        return $this->hasOne(CRMProjectLogins::class, 'id', 'login_id');
    }
}
