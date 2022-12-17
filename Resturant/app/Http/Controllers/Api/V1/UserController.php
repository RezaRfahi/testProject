<?php

namespace App\Http\Controllers\Api\V1;

use App\Enum\UserLevelEnum;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserLoginRequest;
use App\Http\Requests\UserStoreRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash as Hash;
use Symfony\Component\HttpFoundation\JsonResponse;

class UserController extends Controller
{
    public function login(UserLoginRequest $request)
    {
        if (!auth()->attempt($request->all()))
        {
         return response([
             'data' => [
             'message' => 'user not found!'
             ],
             'status' => JsonResponse::HTTP_UNAUTHORIZED
         ]);
        }
        return response([
            'data' => [
                'message' => 'you logged in successfully'
            ],
            'status' => JsonResponse::HTTP_OK
        ]);
    }

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
    public function store(UserStoreRequest $request)
    {
        User::create($request->all());
        return  response([
            'data' => [
                'message' => 'the user has been created!'
            ],'status' => JsonResponse::HTTP_OK
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
