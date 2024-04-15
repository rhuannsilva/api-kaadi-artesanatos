<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CollectionItemModel extends Model
{
    use HasFactory;

    protected $table = 'item_collection';
    protected $primaryKey = 'item_collection_id';

    protected $fillable = [
        'collection_id',
        'product_id',
        'creation_date',
        'creation_user',
    ];

    public $timestamps = false;
}
