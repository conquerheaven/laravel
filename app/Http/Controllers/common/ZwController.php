<?php namespace App\Http\Controllers\common;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Zw;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
class ZwController extends Controller {

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

	public function getAll(){
		$zw = Zw::orderby('bm_name')->get();
		return json_encode(array('result'=>true,'zw'=>$zw));
	}

	public function getZwByBm(){
		$bm = Input::get('bm');
		if(strlen($bm) == 0) return $this->getAll();
		try {
			$zw = Zw::where('bm_id', $bm)->orderby('bm_name')->get();
			return json_encode(array('result'=>true,'zw'=>$zw));
		}catch (Exception $e){
			return json_encode(array('result'=>false ,'message'=>$e));
		}
	}
}