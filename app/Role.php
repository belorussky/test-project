<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

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
        return $this->belongsTo(App\User::class);
    }
}
