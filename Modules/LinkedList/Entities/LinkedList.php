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
        'next_id',
        'previous_id',
    ];

    public function next()
    {
        return $this->belongsTo(LinkedList::class, 'next_id');
    }

    public function previous()
    {
        return $this->belongsTo(LinkedList::class, 'previous_id');
    }

    protected static function newFactory()
    {
        return \Modules\LinkedList\Database\factories\LinkedListFactory::new();
    }
}
