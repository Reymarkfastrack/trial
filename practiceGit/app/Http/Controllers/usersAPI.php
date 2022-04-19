<?php

namespace App\Http\Controllers;

use App\models\users;
use Illuminate\Http\Request;

class usersAPI extends Controller
{
    
    protected function getUsers(Request $request)
    {
    	$data = users::all();

    	return response()->json($data);
    }

    protected function getSpecific_user(Request $request)
    {
    	$data = users::find($request->user_id);

    	return response()->json($data);
    }

    protected function updateSpecific_user(Request $request)
    {
    	$users = users::find($request->user_id);
    	$users->firstname = $request->firstname;
    	$users->middlename = $request->middlename;
    	$users->lastname = $request->lastname;
    	$users->address = $request->address;
    	$users->age = $request->age;
    	$users->gender = $request->gender;
    	$result = $users->save();

    	return response()->json($result);
    }

    protected function deleteSpecific_user(Request $request)
    {
    	$users = users::find($request->user_id);
    	$result = $users->delete();

    	return response()->json($result);
    }
}
