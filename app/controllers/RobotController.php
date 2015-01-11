<?php

class RobotController extends Controller {

	public function Robot()
	{
					
		$users = User::all();

		return View::make('RobotView', array('users' => $users));
		
		
		
		//return View::make('RobotView');
	}

}