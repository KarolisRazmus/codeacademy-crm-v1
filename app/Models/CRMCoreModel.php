<?php
/**
 * Created by PhpStorm.
 * User: CodeAcademy
 * Date: 4/21/2017
 * Time: 9:16 AM
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class CRMCoreModel extends Model
{
    use SoftDeletes;

    /**
     * @var bool
     */
    public $incrementing = false;

    /**
     *  generate varchar random id, when there is no id
     */
    protected static function boot ()
    {
        parent::boot ();

        static::creating ( function ( $model ) {
            $model->{$model->getKeyName ()} = (string) $model->generateNewId ();
        } );
    }

    public function generateNewId ()
    {
        if ( isset( $this->attributes[ 'id' ] ) ) {
            return $this->attributes[ 'id' ];
        }

        return Uuid::uuid4 ();
    }

}

