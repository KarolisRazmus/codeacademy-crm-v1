<?php

namespace App\Models\CRMPersonTypes;

use Illuminate\Database\Eloquent\Model;

class CRMPersonTypes extends Model
{
    /**
     * the database table used by model.
     */
    protected $table = 'crm_person_types';

    /**
     * the attributes that are mass assignable.
     */
    protected $fillable = [
        'id', 'name', 'description',
    ];
}
