<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $email
 * @property string $title
 * @property string $description
 * @property string $created_at
 * @property string $updated_at
 */
class Contact extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['email', 'title', 'description', 'created_at', 'updated_at'];

}
