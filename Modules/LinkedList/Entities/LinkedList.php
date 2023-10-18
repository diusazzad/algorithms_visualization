<?php

namespace Modules\LinkedList\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class linkedList extends Model
{
    use HasFactory;
    protected $table = 'linked_lists'; // Adjust to match your actual table name

    protected $fillable = [
        'value',
    ];

    protected static function newFactory()
    {
        return \Modules\LinkedList\Database\factories\LinkedListFactory::new();
    }
}
