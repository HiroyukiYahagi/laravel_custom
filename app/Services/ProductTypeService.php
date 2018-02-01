<?php

namespace App\Services;

use App\Models\ProductType;
use Validator;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Cache;

class ProductTypeService
{
    public function getAll(){
        return Cache::get('productTypes', function () {
            $productTypes = ProductType::get();
            Cache::put('productTypes', $productTypes);
            return $productTypes;
        });
    }
    
}