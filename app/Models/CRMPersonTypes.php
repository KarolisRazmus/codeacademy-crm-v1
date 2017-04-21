<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CRMPersonTypes extends Model
{
    use SoftDeletes;
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
