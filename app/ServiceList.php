<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServiceList extends Model
{
    //
    protected $table = 'service_lists';
	public $primaryKey = 'id';
    public $timestamps = false;

    public function rules()
    {
        return [
            'name' => "required|min:5|max:30|unique:$this->table,name",
            'description' => 'nullable|min:10|max:50',
            'standard_time' => 'required|min:5|max:12',
            'category' => 'required|exists:service_categories,id',
        ];
    }
    
    public function updateRules()
    {
        $name = $this->name;
        return [
            'name' => "required|min:5|max:30|unique:$this->table,name,$name,name",
            'description' => 'nullable|min:10|max:50',
            'category' => 'required|exists:service_categories,id',
            'standard_time' => 'required|min:5|max:12',
            'service' => "required|exists:$this->table,id",
 
        ];
    }

    public function checkIfServiceExists()
    {
        return [
            'service' => "required|exists:$this->table,id"
        ];
    }
    
    public function category()
    {
        return $this->belongsTo('App\ServiceCategory', 'category_id', 'id');
    }
}
