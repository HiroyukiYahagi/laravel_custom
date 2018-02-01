<?php

namespace App\Services;

use App\Models\Product;
use App\Models\Tag;
use Validator;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Log;

class ProductService
{

    public function getAll(){
        return Product::with(["tags", "productType"])->orderBy("started_at", "asc")->get();
    }

    public function add($url){
        $graph = OGPService::fetch($url);
        $data["title"] = trim($graph->title);
        $data["description"] = trim($graph->description);
        $data["image_url"] = trim($graph->image);
        $data["url"] = $url;

        Log::info($graph->keys());

        $product = Product::create($data);
        return $product;
    }
    

    public function edit($productId, $data){

        $product = Product::find($productId);
        $product->fill($data);

        Validator::make($product->toArray(), [
            'product_type_id' => 'required|exists:product_types,id',
            'title' => 'required|string|max:255',
            'image_url' => 'required|string|max:255',
            'url' => 'required|string|max:255',
            'description' => 'required|string',
            'started_at' => 'required|date',
            'released_at' => 'required|date',
        ])->validate();

        if( isset($data["tags"]) ){

            $tagIds = collect( explode(",", $data["tags"]) )->filter(function ($label, $index) {
                if(strlen($label) == 0){
                    return false;
                }
                return true;
            })->map( function($label, $index) {
                $tag = Tag::firstOrCreate([
                    "label" => $label
                ]);
                return $tag->id;
            });
            $product->tags()->sync($tagIds);
        }

        $product->save();
        return $product;
    }

    public function delete($productId){
        Product::destroy($productId);
    }
    
}