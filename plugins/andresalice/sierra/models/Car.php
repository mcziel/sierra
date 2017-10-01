<?php namespace Andresalice\Sierra\Models;

use Model;
use Andresalice\Sierra\Models\Modelc;
use Andresalice\Sierra\Models\Make;

/**
 * Model
 */
class Car extends Model
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
    public $table = 'andresalice_sierra_cars';

    public $attachOne = ['featured_image' => ['System\Models\File']];
    
    public $attachMany = ['images' => ['System\Models\File']];

    public $belongsTo = ['model' => 'Andresalice\Sierra\Models\Modelc', 'dealer' => 'Andresalice\Sierra\Models\Dealer'];

    public function beforeSave()
    {
    	$model = Modelc::find($this->model_id);
    	$make = Make::find($model->make_id); 

        $this->title = $make->name . " " . $model->name . " " . $this->submodel . " " . $this->year . " " . $this->type . " " . $this->gas . " " . $this->transmision . " " . $this->color . " " . $this->status;
    }

    public function scopeWithMakeName ($query) {
        $car = 'andresalice_sierra_cars';
        $model = 'andresalice_sierra_carmodels';
        $make = 'andresalice_sierra_carmakes';
        $dealer = 'andresalice_sierra_dealers';
        return $query->select($this->getTable() . '.*', $make . '.name as make_name', $model . '.name as model_name', $dealer . '.name as dealer_name')
                     ->join($model, $car . '.model_id', '=', $model . '.id')
                     ->join($make, $model . '.make_id', '=', $make . '.id')
                     ->join($dealer, $car . '.dealer_id', '=', $dealer . '.id')
                     ->get();
    }

    public function listType ($keyValue=null, $fieldName=null) 
    {
        return ['Camioneta' => 'Camioneta', 'Jeepeta' => 'Jeepeta', 'Coupé/Sport' => 'Coupé/Sport', 'Sedán' => 'Sedán', 'Compacto' => 'Compacto', 'Camiones' => 'Camiones', 'Motores' => 'Motores'];
    }

    public function listUse ($keyValue=null, $fieldName=null) 
    {
        return ['Nuevo' => 'Nuevo', 'Usado' => 'Usado'];
    }

    public function listGas ($keyValue=null, $fieldName=null) 
    {
        return ['Gasolina' => 'Gasolina', 'Gas' => 'Gas', 'Gasoil' => 'Gasoil'];
    }

    public function listTransmisions ($keyValue=null, $fieldName=null) 
    {
        return ['Automática' => 'Automática', 'Mecánica' => 'Mecánica', 'Sincronizada' => 'Sincronizada', 'Semiautomática' => 'Semiautomática','Mecánica o Automática' => 'Mecánica o Automática', 'Tiptronic' => 'Tiptronic'];
    }

    public function listTractions ($keyValue=null, $fieldName=null) 
    {
        return ['Delantera' => 'Delantera', 'Trasera' => 'Trasera', '2WD' => '2WD', '4WD' => '4WD', '4WD Full Time' => '4WD Full Time',];
    }

}