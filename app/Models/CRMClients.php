<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CRMClients extends Model
{
    use SoftDeletes;
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