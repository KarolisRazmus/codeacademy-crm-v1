<?php

namespace App\Models;

class CRMPersons extends CRMCoreModel
{
    /**
     * Table name
     *
     * @var string
     */
    protected $table = 'crm_persons';

    /**
     * @var array
     */

    protected $fillable = ['id','name','email','phone'];

    protected $hidden = [ 'count' , 'created_at' , 'updated_at' , 'deleted_at'];
}
