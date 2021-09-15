<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Customer;

class Company extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function customers()
    {
        return $this->hasMany(Customer::class); 
    }
}