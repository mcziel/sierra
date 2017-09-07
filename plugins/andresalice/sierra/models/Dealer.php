<?php namespace Andresalice\Sierra\Models;

use Model;

/**
 * Model
 */
class Dealer extends Model
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
    public $table = 'andresalice_sierra_dealers';

    public $attachOne = ['featured_image' => ['System\Models\File']];
}