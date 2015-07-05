<?php namespace App\Tpl\Http\Controllers;

use Pingpong\Modules\Routing\Controller;

class TplController extends Controller {
	
	public function index()
	{
		return view('tpl::index');
	}
	
}