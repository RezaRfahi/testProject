<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreReservationRequest;
use App\Models\Reservation;
use App\Http\Resources\V1\ReservationCollection;
use App\Http\Resources\V1\Reservation as ReservationResource;
use App\Models\Resturant;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ReservationController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreReservationRequest $request)
    {
        $reservation_code=createRandomCode();
        $request->merge([
            'user_name' => User::query()->where('id', '=', $request->user_id)->first()->name,
            'resturant_name' => Resturant::query()->where('id', '=', $request->resturant_id)->first()->name,
            'reservation_code' => $reservation_code, 'table_number' => rand(1,50)]);
        Reservation::create($request->all());
        return
            response([
                'data' => [
                    'message' => 'the resturant has been reserved!',
                    'reservation_code' => $reservation_code,
                ],'status' => JsonResponse::HTTP_OK
            ]);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function edit(Reservation $reservation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reservation $reservation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reservation $reservation)
    {
        //
    }

    public function userShow(Request $request)
    {
        return
            (new ReservationCollection(
            Reservation::query()->where('reservation_code','=',$request->reservation_code)->get()
        ))->response();
    }

}

