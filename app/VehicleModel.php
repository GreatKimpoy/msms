<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VehicleModel extends Model
{
    //
    
    protected $table = 'vehicle_models';
    public $primaryKey = 'id';
    public $timestamps = false;
    public static $transmission_types = [
        'Automatic', 'Manual', 'AT/MT'
    ];

    protected $fillable = [
        'make',
        'model',
        'size',
        'transmission',
        'vehicle_id',

    ];

    public function rules()
    {
        return [
            'make' => "required|min:1|max:30",
            'model' => "required|min:3|max:50|unique:$this->table,model",
            'size' => "required",
            'transmission' => "required",
           
        ];
    }
    
    public function updateRules()
    {
        $brand = $this->brand;
        return [
            'make' => 'required|min:1|max:30',
            'model' => 'nullable|min:3|max:50',
            'size' => 'required',
            'transmission' => 'required',
        ];
    }

    
    public function checkIfCategoryExists()
    {
        return [
            'category' => "required|exists:$this->table,id"
        ];
    }

    
    public function part(){
        return $this->belongsTo('App\VehiclePart','vehicle_id','id');
    }

}


