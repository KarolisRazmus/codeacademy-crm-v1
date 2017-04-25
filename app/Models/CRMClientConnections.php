<?php

namespace App\Models;

class CRMClientConnections extends CRMCoreModel
{
    /**
     * the database table used by model.
     */
    protected $table = 'crm_client_connections';

    /**
     * the attributes that are mass assignable.
     */
    protected $fillable = [
        'id' , 'client_id' , 'person_id' , 'contact_type_id' , 'description' ,
    ];
    protected $hidden = [ 'count' , 'created_at' , 'updated_at' , 'deleted_at', 'client_id' , 'person_id' , 'contact_type_id' ];

    public function clientIdData (  )
    {
        return $this->hasOne(CRMClients::class, 'id', 'client_id');
    }

    public function personIdData (  )
    {
        return $this->hasOne(CRMPersons::class, 'id', 'person_id');
    }

    public function ContactTypeData (  )
    {
        return $this->hasOne(CRMClientConnectionsTypes::class, 'id', 'contact_type_id');
    }
}