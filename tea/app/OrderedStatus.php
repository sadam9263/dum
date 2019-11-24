<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderedStatus extends Model
{
    public $table = "ordered_status";
    protected $fillable = [
        'name', 'active', 'count',
    ];
}
