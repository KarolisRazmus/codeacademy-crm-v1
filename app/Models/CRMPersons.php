<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CRMPersons extends Model
{
    use SoftDeletes;
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
}
