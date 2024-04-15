<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductModel extends Model
{
    use HasFactory;

    protected $table = 'products';
    protected $primaryKey = 'product_id';

    protected $fillable = [
        'product_id',
        'description',
        'category_id',
        'sale_value',
        'status',
        'creation_date',
        'creation_user',
    ];

    public $timestamps = false;
}
