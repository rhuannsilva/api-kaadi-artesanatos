<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CollectionModel extends Model
{
    use HasFactory;

    protected $table = 'collection';
    protected $primaryKey = 'collection_id';

    protected $fillable = [
        'collection_id',
        'description',
        'status',
        'start_date',
        'end_date',
        'creation_date',
        'creation_user',
    ];

    public $timestamps = false;
}
