<?php namespace App\Http\Controllers\common;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Ygdangan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
class YgdanganController extends Controller {

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
		$ygdangan = Ygdangan::all();
		return json_encode(array('result'=>true , 'ygdangan'=>$ygdangan));
	}

	public function getByNameStats(){
		$name = Input::get('name');
		$stats = Input::get('stats');
		try{
			if($stats == 0) $ygdangan = Ygdangan::where('name','like','%'.$name.'%')->get();
			else $ygdangan = Ygdangan::where('stats',$stats)->get();
			$ZwController = new ZwController();
			for($i = 0; $i < count($ygdangan); $i++){
				$zw = $ZwController->getZwByGz_id($ygdangan[$i]['gzname']);
				$arr = json_decode($zw , true);
				if(count($arr['zw']) > 0){
					$ygdangan[$i]['bmname'] = $arr['zw'][0]['bm_name'];
					$ygdangan[$i]['gzname'] = $arr['zw'][0]['gz_name'];
				}else{
					$ygdangan[$i]['bmname'] = '';
					$ygdangan[$i]['gzname'] = '';
				}
			}
			return json_encode(array('result'=>true,'ygdangan'=>$ygdangan));
		}catch(Exception $e){
			return json_encode(array('result'=>false , 'message'=>$e));
		}
	}

	public function getByBianhao($bianhao){
		try{
			$ygdangan = Ygdangan::where('bianhao',$bianhao)->get();
			if(count($ygdangan) == 0) return json_encode(array('result'=>false,'ygdangan'=>$ygdangan));
			else return json_encode(array('result'=>true,'ygdangan'=>$ygdangan));
		}catch(Exception $e){
			return json_encode(array('result'=>false,'message'=>$e));
		}
	}

	public function insert(){
		$staff = Input::all();
		try{
			Ygdangan::insert($staff);
			return json_encode(array('result'=>true));
		}catch(Exception $e){
			return json_encode(array('result'=>false,'message'=>$e));
		}
	}

}
