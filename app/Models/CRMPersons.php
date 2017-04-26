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

    public function persons (  )
    {
        return $this->hasMany(CRMPersonConnections::class, 'person_id', 'id')
            ->with(['type']);
    }

}
