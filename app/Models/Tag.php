<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $label
 * @property string $color
 * @property string $created_at
 * @property string $updated_at
 * @property TagRelation[] $tagRelations
 */
class Tag extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['label', 'color', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function products()
    {
        return $this->belongsToMany('App\Models\TagRelation', 'tag_product_relations');
    }
}
