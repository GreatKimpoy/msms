<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VehiclePart extends Model
{
    protected $table = 'vehicle_parts';
    public $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'vehicle_id',
        'number',
        'description'
        
    ];



    public function model(){
        return $this->hasMany('App\VehicleModel','vehicle_id', 'id');
    }
    
    public function material(){
        return $this->hasMany('App\Material','vehicle_part_id');
    }
}
