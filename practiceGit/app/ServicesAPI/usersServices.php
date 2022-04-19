<?php

namespace App\ServicesAPI;

use App\models\users;
use Illuminate\Http\Request;

Class usersServices{


	public function getUsers()
    {
    	return users::all();
    }

    public function getSpecific_user($user_id)
    {
    	$data = users::find($user_id);
    	return ($data) ? $data : 'No result';
    }

    public function createUser(Request $request, users $users)
    {
    	return $users->create($request->all());
    }

    public function updateSpecific_user(Request $request, users $users)
    {
    	try{
    		$users = users::find($request->user_id);

    		$users->firstname = $request->firstname;
	    	$users->middlename = $request->middlename;
	    	$users->lastname = $request->lastname;
	    	$users->address = $request->address;
	    	$users->age = $request->age;
	    	$users->gender = $request->gender;
	    	$result = $users->save();

	    	return $result;

    	} catch(\Exception $exception){
    		return ["error" => $exception->getMessage()];
    	}

    	
    }

    protected function deleteSpecific_user(Request $request, users $users)
    {
    	try{
    		$users = users::find($request->user_id);
	    	$result = $users->delete();

	    	return $result;
    	} catch(\Exception $exception){
    		return ["error" => $exception->getMessage()];
    	}
    	
    }
}







?>