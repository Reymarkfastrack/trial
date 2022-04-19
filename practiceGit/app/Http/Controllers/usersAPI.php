<?php

namespace App\Http\Controllers;

use App\models\users;
use App\ServicesAPI\usersServices;
use Illuminate\Http\Request;

class usersAPI extends Controller
{
    
    protected function getUsers(users $users, usersServices $usersServices)
    {
    	return response()->json($usersServices->getUsers());
    }

    protected function getSpecific_user(Request $request, usersServices $usersServices)
    {
        return response()->json($usersServices->getSpecific_user($request->user_id));
    }

    protected function createUser(Request $request, usersServices $usersServices, users $users)
    {
        return response()->json($usersServices->createUser($request, $users));
    }

    protected function updateSpecific_user(Request $request, usersServices $usersServices, users $users)
    {
    	return response()->json($usersServices->updateSpecific_user($request, $users));
    }

    protected function deleteSpecific_user(Request $request)
    {
    	return response()->json($usersServices->deleteSpecific_user($request, $users));
    }
}
