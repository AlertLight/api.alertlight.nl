<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pole;

class PoleController extends Controller
{
    public function NewPole(Request $request)
	{

		$this->validate($request, [
			'locationid' => 'required'
		]);

		$pole = new Pole();

		$pole->locationid = $request->locationid;
		$pole->save();

		return $pole;

	}

	public function GetAll()
	{
		return Pole::all();
	}

}
