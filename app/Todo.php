<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    protected $fillable = ['title', 'description', 'completed_by', 'author', 'created_at', 'updated_at', 'completed'];

    protected $dates = ['completed_by'];
}
