<?php

namespace App\Models\CRMClients;

use Illuminate\Database\Eloquent\Model;

class CRMClients extends Model
{
    /**
     * the database table used by model.
     */
    protected $table = 'crm_clients';

    /**
     * the attributes that are mass assignable.
     */
    protected $fillable = [
        'id', 'name',
    ];
}