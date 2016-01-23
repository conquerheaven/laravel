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

	public function getZwByGz_name($gz_name){
		$zw = Zw::where('gz_name',$gz_name)->get();
		if(count($zw) == 0){
			return json_encode(array('result'=>false , 'zw'=>$zw));
		}else{
			return json_encode(array('result'=>true , 'zw'=>$zw));
		}
	}

	public function getZwByGz_id($gz_id){
		$zw = Zw::where('gz_id',$gz_id)->get();
		if(count($zw) == 0){
			return json_encode(array('result'=>false , 'zw'=>$zw));
		}else{
			return json_encode(array('result'=>true , 'zw'=>$zw));
		}
	}

	public function insert(){
		$zw = Input::all();
		try{
			Zw::insert($zw);
			return json_encode(array('result'=>true));
		}catch (Exception $e){
			return json_encode(array('result'=>false , 'message'=>$e));
		}
	}

	public function deleteByGz_id(){
		$gz_id = Input::get('gz_id');
		try{
			$zw = Zw::where('gz_id',$gz_id)->delete();
			return json_encode(array('result'=>true));
		}catch (Exception $e){
			return json_encode(array('result'=>false,'message'=>$e));
		}


	}
}

