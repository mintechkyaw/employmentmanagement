<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProfileUpdateRequest;
use App\Http\Requests\RegisterRequest;
use App\Http\Resources\EmploymentResource;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::paginate(15);
        return EmploymentResource::collection($users);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RegisterRequest $request)
    {
        $data = $request->validated();
        $data['password'] = Hash::make($data['password']);
        $user = User::create($data);
        return response()->json([
            'message' => 'User registered successfully',
            'user' => $user
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show($user)
    {
        if ($user = User::find($user)) {
            return new EmploymentResource($user);
        }
        return response()->json([
            'msg' => 'user not found!'
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProfileUpdateRequest $request, $user)
    {
        $user = User::find($user);
        $data = $request->validated();
        $user->update($data);
        return response()->json(['message' => 'Employee Profile Updated.'], 202);
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($user)
    {
        if ($user = User::find($user)) {
            if ($user->id == Auth::id()) {
                return response()->json(["messsage'=> 'You're deleting yourself "]);
            } else {
                $user->delete();
                return  response()->json(['message' => 'Employee Deleted.'], 202);
            }
        }
        return response()->json([
            'msg' => 'user not found!'
        ]);
    }
}
