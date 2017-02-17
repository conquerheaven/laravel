<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Input;

class LoginController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		return view('_layout/login');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

	public function login()
	{
		//
		return view('_layout/login');
	}

	public function doLogin(Request $request)
	{
		$username = Input::get('username');
		$password = Input::get('password');
		$user = User::where(['UserName'=>$username,'PassWord'=>md5($password)])->first();
		if($user == null){
			$result = array('result'=>false);
			return json_encode($result);
		}else{
			$result = array('result'=>true,'user'=>$user);
			$request->session()->put('user', $user);
			return json_encode($result);
		}
	}

	public function doLogout(Request $request)
	{
		$request->session()->forget('user');
		return json_encode(array('result'=>true));
	}
}
