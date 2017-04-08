<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Speed;

class SpeedController extends Controller
{
    public function NewSpeed(Request $request)
	{
		$this->validate($request, array(
			'poleid' => 'required',
			'km' => 'required',
		));

		$speed = new Speed();
		$speed->poleid = $request->poleid;
		$speed->km = $request->km;

		$speed->save();

		return $speed;

	}

	public function GetAll()
	{
		return Speed::all();
	}

}
