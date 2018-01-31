<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $product_type_id
 * @property string $started_at
 * @property string $released_at
 * @property string $title
 * @property string $image_url
 * @property string $url
 * @property string $created_at
 * @property string $updated_at
 * @property ProductType $productType
 * @property TagRelation[] $tagRelations
 */
class Product extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['product_type_id', 'started_at', 'released_at', 'title', 'image_url', 'url', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function productType()
    {
        return $this->belongsTo('App\Models\ProductType');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tags()
    {
        return $this->belongsToMany('App\Models\TagRelation', 'tag_product_relations');
    }
}
