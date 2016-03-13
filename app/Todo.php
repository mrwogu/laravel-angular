<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model {

    protected $collection = 'todos';

    protected $casts = [
        'completed' => 'boolean'
    ];
}
