<?php namespace App\Http\Controllers\common;

use App\Bm;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
class BmController extends Controller {

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
		$bm = Bm::all();
		return json_encode(array('bm'=>$bm));
	}

	public function getBmByBm_name($bm_name){
		$bm = Bm::where('bm_name',$bm_name)->get();
		if(count($bm) == 0){
			return json_encode(array('result'=>false , 'bm'=>$bm));
		}else{
			return json_encode(array('result'=>true , 'bm'=>$bm));
		}
	}

	public function getBmByBm_id($bm_id){
		$bm = Bm::where('bm_id',$bm_id)->get();
		if(count($bm) == 0){
			return json_encode(array('result'=>false , 'bm'=>$bm));
		}else{
			return json_encode(array('result'=>true , 'bm'=>$bm));
		}
	}

	public function insert(){
		$bm = Input::all();
		try{
			Bm::insert($bm);
			return json_encode(array('result'=>true));
		}catch (Exception $e){
			return json_encode(array('result'=>false , 'message'=>$e));
		}
	}

	public function deleteByBm_id(){
		$bm_id = Input::get('bm_id');
		try{
			$bm = Bm::where('bm_id',$bm_id)->delete();
			return json_encode(array('result'=>true));
		}catch (Exception $e){
			return json_encode(array('result'=>false,'message'=>$e));
		}


	}
}
