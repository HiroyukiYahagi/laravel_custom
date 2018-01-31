<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $label
 * @property string $color
 * @property string $icon
 * @property string $created_at
 * @property string $updated_at
 * @property Product[] $products
 */
class ProductType extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['label', 'color', 'icon', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function products()
    {
        return $this->hasMany('App\Models\Product');
    }
}
