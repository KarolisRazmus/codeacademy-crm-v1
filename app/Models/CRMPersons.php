<?php

namespace App\Models;

class CRMPersons extends CRMCoreModel
{
    /**
     * the database table used by model.
     */

    protected $table = 'crm_persons';

    /**
     * the attributes that are mass assignable.
     */

    protected $fillable = ['id','name','email','phone'];
}
