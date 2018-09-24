<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InspectionItem extends Model
{
    protected $table = 'inspection_items';
    //Primary Key
	public $primaryKey = 'id';
    // Timestamps
    public $timestamps = false;
    
    protected $fillable = [
    	'name',
        'form',
    	'type_id',	
    ];

    public function type()
    {
        return $this->belongsTo('App\InspectionType', 'type_id');
    }

    public function inspection()
    {
        return $this->hasMany('App\InspectionHeader', 'inspection_id');
    }

}
