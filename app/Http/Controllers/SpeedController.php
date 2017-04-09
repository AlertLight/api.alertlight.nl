<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Speed;

class SpeedController extends Controller
{
    public function NewSpeed($poleid, $km)
	{

		$speed = new Speed();
		$speed->poleid = $poleid;
		$speed->km = $km;

		$speed->save();

		return $speed;

	}

	public function GetAll()
	{
		return Speed::all()->last();
	}

}
