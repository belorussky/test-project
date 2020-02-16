<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Role extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
    ];


    /**
     * Return a user.
     *
     * @return array
     */
    public function getUserByRoleId()
    {
        return $this->belongsTo(User::class);
    }
}
