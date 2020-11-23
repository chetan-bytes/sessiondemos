<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CustomErrorMessageController extends Controller
{
	public function index(Request $request){

		$validator = Validator::make($request->all(), [
			'firstname' => 'required',
			'firstname.required' => 'this is my custom error message for required'
		]);

		if ($validator->fails()) 
		{
			return response()->json([
				'status' => 'failed',
				'msg' => 'Validation error, Please try again.',
				'data' => $validator->errors()
			]);
		}
		else
		{
			dd("Success",$request->all());
		}

	}
	
}
