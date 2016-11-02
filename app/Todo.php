<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model {

    protected $collection = 'todos';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'completed', 'ring', 'latitude', 'longitude'
    ];

    protected $casts = [
        'completed' => 'boolean'
    ];

    /**
     * Get the user that owns the todo.
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
