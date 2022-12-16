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

        Resturant::create($request->all());
        return
            response([
            'data' => [
                'message' => 'your data inserted successfully!'
            ],'status' => JsonResponse::HTTP_OK
        ])
;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Resturant  $resturant
     * @return \Illuminate\Http\Response
     */
    public function show(Resturant $resturant)
    {
        return (new ResturantResource($resturant))->response();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Resturant  $resturant
     * @return \Illuminate\Http\Response
     */
    public function edit(Resturant $resturant)
    {
        return (new ResturantResource($resturant))->response();
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
        $resturant->update($request->all());
        return
            response([
                'data' => [
                    'message' => 'the resturant has been updated!'
                ],'status' => JsonResponse::HTTP_OK
            ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Resturant  $resturant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Resturant $resturant)
    {
        $resturant->delete();
        return
        response([
            'data' => [
                'message' => 'the resturant has been deleted!'
            ],'status' => JsonResponse::HTTP_OK
        ]);
    }
}
