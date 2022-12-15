<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreResturantRequest;
use App\Http\Requests\UpdateResturantRequest;
use App\Http\Resources\V1\ResturantCollection;
use App\Models\Resturant;
use \App\Http\Resources\V1\Resturant as ResturantResource;
use Illuminate\Http\JsonResponse;

class ResturantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return  (new ResturantCollection(Resturant::all()))->response();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreResturantRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreResturantRequest $request)
    {
//         $resturant= new Resturant([
//            'name' => $request->name,
//            'address' => $request->address,
//            'manager_name' => $request->manager_name,
//            'tel' => $request->tel,
//            'capacity' => $request->capacity,
//            'free_capacity' => $request->free_capacity
//        ]);
        return $request->all() ;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Resturant  $resturant
     * @return \Illuminate\Http\Response
     */
    public function show(Resturant $resturant)
    {
        return new ResturantResource($resturant);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Resturant  $resturant
     * @return \Illuminate\Http\Response
     */
    public function edit(Resturant $resturant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateResturantRequest  $request
     * @param  \App\Models\Resturant  $resturant
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateResturantRequest $request, Resturant $resturant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Resturant  $resturant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Resturant $resturant)
    {
        //
    }
}
