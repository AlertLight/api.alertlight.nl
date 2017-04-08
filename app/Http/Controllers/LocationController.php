<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Location;

class LocationController extends Controller
{

	public function NewLocation(Request $request)
	{
		$this->validate($request, array(
			'poleid' => 'required',
			'city' => 'required',
			'lat' => 'required',
			'long' => 'required'
		));

		$location = new Location();
		$location->poleid = $request->poleid;
		$location->city = $request->city;
		$location->lat = $request->lat;
		$location->long = $request->long;

		$location->save();

		return $location;

	}

	public function GetAll()
	{
		return Location::all();
	}

}
