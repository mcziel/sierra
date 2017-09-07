<?php namespace Andresalice\Sierra\Models;

use Model;

/**
 * Model
 */
class Contact extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;

    /*
     * Validation
     */
    public $rules = [
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'andresalice_sierra_contacts';

    public function listStatus ($keyValue=null, $fieldName=null) 
    {
        return ['Sin Revisar' => 'Sin Revisar', 'Revisado' => 'Revisado'];
    }
}