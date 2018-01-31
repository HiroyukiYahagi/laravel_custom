<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Foundation\Auth\User as Authenticatable;

/**
 * @property int $id
 * @property string $email
 * @property string $password
 * @property string $remember_token
 * @property int $role
 * @property string $created_at
 * @property string $updated_at
 */
class Admin extends Authenticatable
{
    /**
     * @var array
     */
    protected $fillable = ['email', 'password', 'remember_token', 'role', 'created_at', 'updated_at'];

    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }

}
