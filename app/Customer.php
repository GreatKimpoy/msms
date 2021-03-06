<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    //
    protected $table = 'customers';
	public $primaryKey = 'id';
    public $timestamps = false;
    public $fillable = [
        'lastname',
        'firstname',
        'middlename',
        'barangay',
        'contact',
        'city',
        'street',
        'email',
    ];


    public function checkIfCustomerExists()
    {
        return [
            'customer' => "required|exists:$this->table,id"
        ];
    }

    protected $appends = [
        'full_name', 'full_address'
    ];

    public function getFullNameAttribute()
    {
        $lastname = $this->lastname;
        $firstname = $this->firstname;
        $middlename = $this->middlename;
        return trim("$lastname, $firstname $middlename");
    }

    public function getFullAddressAttribute()
    {
        $street = $this->street;
        $barangay = $this->barangay;
        $city = $this->city;
        return trim("$street $barangay $city");
    }


    public function getVehiclesIdAttribute()
    {
        $vehicles = $this->vehicles->pluck('id');
        if( count($vehicles->toArray() ) > 0 ) {
            return $vehicles->toArray();
        }
    }
}
