<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inspection extends Model
{
    protected $table = 'inspections';
    public $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'customer_id',
        'owner_id',
        'additional_remarks'
        
    ];



    public function inspection(){
        return $this->hasMany('App\InspectionHeader','inspection_id');
    }
    
    public function customer(){
        return $this->belongsTo('App\Customer','customer_id');
    }
    
    public function vehicles(){
        return $this->belongsTo('App\VehicleOwner','vehicle_id');
    }
    
    public function technician(){
        return $this->hasMany('App\InspectionTechnician','inspectionId')->where('isActive',1);
    }
}
