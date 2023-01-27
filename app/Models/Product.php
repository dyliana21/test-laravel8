<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'description', 'qty', 'uom', 'price', 'discount', 'vat', 'currency', 'vat_amount', 'sub_total', 'total', 'charge_to'
      ];
}
