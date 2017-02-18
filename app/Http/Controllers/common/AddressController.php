<?php namespace App\Http\Controllers\common;

use App\City;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Province;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

use App\County;
class AddressController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
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

	public function getAllProvince(){
		$province = Province::all();
		return json_encode(array('result'=>true , 'province'=>$province));
	}

	public function getCityByProvincecode(){
		$provincecode = Input::get('provincecode');
		$city = City::where('provincecode',$provincecode)->get();
		return json_encode(array('result'=>true , 'city'=>$city));
	}

	public function getCountyByCitycode(){
		$citycode = Input::get('citycode');
		$county = County::where('citycode',$citycode)->get();
		return json_encode(array('result'=>true , 'county'=>$county));
	}

}
