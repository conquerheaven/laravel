<?php namespace App\Http\Controllers\common;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Kehu;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Input;
use Psy\Exception\Exception;

class KehuController extends Controller {

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
	 * @return json kehu message
	 */
	public function show()
	{
		//
		$id = Input::get('id');
		$kehu = Kehu::find($id);
		if(count($kehu) == 0){
			return json_encode(array('result'=>false));
		}else {
			return json_encode(array('result'=>true,'kehu'=>$kehu));
		}
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
	/*public function update($id)
	{
		//
	}*/

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

	//根据用户名和手机号获取前pageLimit条数据
	/*
	 * kehuname
	 * phone
	 * pageLimit
	 */
	public function getByNameAndPhone(){
		$name = Input::get('kehuname');
		$phone = Input::get('phone');
		$pageLimit = Input::get('pageLimit');
		$kehu = Kehu::where('telephone','like','%'.$phone.'%')->orWhere('name','like','%'.$name.'%')->orderby('name','desc')->take($pageLimit)->get();
		if(count($kehu) == 0){
			$result = array('result'=>false,'kehu'=>$kehu);
			return json_encode($result);
		}else{
			$result = array('result'=>true,'kehu'=>$kehu);
			return json_encode($result);
		}
	}

	//根据客户id查询用户资料
	/**
	 * @param id
	 * @return json
	 */
	public function getById()
	{
		$id = Input::get('id');
		$kehu = Kehu::find($id);
		if(count($kehu) == 0){
			return json_encode(array('result'=>false));
		}else {
			return json_encode(array('result'=>true,'kehu'=>$kehu));
		}
	}

	public function update(){
		$id = Input::get('id');
		$data = Input::all();
		/*$name = Input::get('name');
		$telephone = Input::get('telephone');
		$ename = Input::get('ename');
		$addtime = Input::get('addtime');
		$khpj = Input::get('khpj');
		$jsxz = Input::get('jsxz');
		$address = Input::get('address');
		$fuzheren = Input::get('fuzheren');
		$telephone2 = Input::get('telephone2');
		$chuanzheng = Input::get('chuanzheng');
		$pingpai = Input::get('pingpai');
		$pingpailx = Input::get('pingpailx');
		$scname = Input::get('scname');
		$mianji1 = Input::get('mianji1');
		$caozuoren = Input::get('caozuoren');
		$pingjia = Input::get('pingjia');
		$tuoyunbu = Input::get('tuoyunbu');
		$dqid = Input::get('dqid');
		$sheng = Input::get('sheng');
		$city = Input::get('city');
		$xian = Input::get('xian');

		$kehu = Kehu::find($id);
		$kehu->name = $name;
		$kehu->telephone = $telephone;
		$kehu->ename = $ename;
		$kehu->addtime = $addtime;
		$kehu->khpj = $khpj;
		$kehu->jsxz = $jsxz;
		$kehu->address = $address;
		$kehu->fuzheren = $fuzheren;
		$kehu->telephone2 = $telephone2;
		$kehu->chuanzheng = $chuanzheng;
		$kehu->pingpai = $pingpai;
		$kehu->pingpailx = $pingpailx;
		$kehu->scname = $scname;
		$kehu->mianji1 = $mianji1;
		$kehu->caozuoren = $caozuoren;
		$kehu->pingjia = $pingjia;
		$kehu->tuoyunbu = $tuoyunbu;
		$kehu->dqid = $dqid;
		$kehu->sheng = $sheng;
		$kehu->city = $city;
		$kehu->xian = $xian;*/

		try{
			//$kehu->save();
			Kehu::where('ID',$id)->update($data);
			return json_encode(array('result'=>true));
		}catch (Exception $e){
			return json_encode(array('result'=>false,'message'=>$e));
		}
	}

	public function insert(){
		$kehu = Input::all();
		try{
			Kehu::insert($kehu);
			return json_encode(array('result'=>true));
		}catch (Exception $e){
			return json_encode(array('result'=>false , 'message'=>$e));
		}
	}

}
