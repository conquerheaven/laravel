<?php namespace App\Http\Controllers\StaffManage;

use App\Http\Controllers\common\BmController;
use App\Http\Controllers\common\ZwController;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class StaffManageController extends Controller {

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

	public function bmzwManage(){
		return view('StaffManage/bmzwManage');
	}

	public function Bm_nameValidate(){
		$bm_name = Input::get('bm_name');
		$BmController = new BmController();
		$jsonData = $BmController->getBmByBm_name($bm_name);
		$arr = json_decode($jsonData,true);
		//return $jsonData;
		if($arr['result']) return 'false';
		else return 'true';
	}

	public function Bm_idValidate(){
		$bm_id = Input::get('bm_id');
		$BmController = new BmController();
		$jsonData = $BmController->getBmByBm_id($bm_id);
		$arr = json_decode($jsonData,true);
		//return $jsonData;
		if($arr['result']) return 'false';
		else return 'true';
	}

	public function Gz_idValidate(){
		$gz_id = Input::get('gz_id');
		$ZwController = new ZwController();
		$jsonData = $ZwController->getZwByGz_id($gz_id);
		$arr = json_decode($jsonData,true);
		//return $jsonData;
		if($arr['result']) return 'false';
		else return 'true';
	}

	public function Gz_nameValidate(){
		$gz_name = Input::get('gz_name');
		$ZwController = new ZwController();
		$jsonData = $ZwController->getZwByGz_name($gz_name);
		$arr = json_decode($jsonData,true);
		//return $jsonData;
		if($arr['result']) return 'false';
		else return 'true';
	}
}
