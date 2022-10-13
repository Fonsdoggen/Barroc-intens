<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductInvoices extends Model
{
    use HasFactory;
    protected $table = 'custom_invoice_products';
    protected $guarded = [''];
}
