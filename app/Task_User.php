<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task_User extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'status', 'user_id', 'task_id'
    ];
}
