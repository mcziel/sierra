<?php namespace Andresalice\Sierra\Models;

use Model;

/**
 * Model
 */
class Modelc extends Model
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
    public $table = 'andresalice_sierra_carmodels';

    public $belongsTo = ['maker' => ['Andresalice\Sierra\Models\Make', 'key' => 'make_id']];

    public $hasMany = ['cars' => ['Andresalice\Sierra\Models\Car', 'key' => 'model_id']];
}