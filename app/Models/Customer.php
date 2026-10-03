<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $primaryKey = 'customer_number';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'customer_number',
        'company_name',
        'fiscal_data',
        'delivery_address',
    ];

    public function orders()
    {
        return $this->hasMany(Order::class, 'customer_number', 'customer_number');
    }
}