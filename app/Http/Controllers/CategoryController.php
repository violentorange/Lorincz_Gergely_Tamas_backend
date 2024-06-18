<?php

namespace App\Http\Controllers;

use App\Http\Resources\EstateResource;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function estatesOfCategory(Category $category)
    {
        //return $category->estates;
        return EstateResource::collection($category->estates);
    }

}
