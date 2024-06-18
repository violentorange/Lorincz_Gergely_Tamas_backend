<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEstateRequest;
use App\Http\Resources\EstateResource;
use App\Models\Estate;
use Illuminate\Http\Request;

class EstateController extends Controller
{

    public function index()
    {
       // return Estate::all();
       // return Estate::with('category')->get();
        return EstateResource::collection(Estate::all());
    }


    public function store(StoreEstateRequest $request)
    {
        $estate = Estate::create($request->all());
        return new EstateResource($estate);
    }



    public function destroy(Estate $estate)
    {
        $estate->delete();
        return response()->noContent();
    }
}
