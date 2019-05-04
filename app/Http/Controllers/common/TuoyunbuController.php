<?php namespace App\Http\Controllers\common;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Tuoyunbu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Psy\Exception\Exception;

class TuoyunbuController extends Controller {

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
        $data = Input::all();
        try{
            Tuoyunbu::where('ID',$id)->update($data);
            return json_encode(array('result'=>true));
        }catch (Exception $e){
            return json_encode(array('result'=>false,'message'=>$e));
        }
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
		$tuoyunbu = Tuoyunbu::all();
		return json_encode(array('tuoyunbu'=>$tuoyunbu));
	}

	public function getByNameAndPhone(){
		$name = Input::get('name');
		$phone = Input::get('phone');
		$pageLimit = Input::get('pageLimit');
		$tyb = Tuoyunbu::where('name','like','%'.$name.'%')->orWhere('telephone','like','%'.$phone.'%')->orderby('name','desc')->take($pageLimit)->get();
		if(count($tyb) == 0){
			return json_encode(array('result'=>false,'tuoyunbu'=>$tyb));
		}else{
			return json_encode(array('result'=>true,'tuoyunbu'=>$tyb));
		}
	}

	public function getById(){
		$id = Input::get('id');
		$tyb = Tuoyunbu::find($id);
		if(count($tyb) == 0){
			return json_encode(array('result'=>false,'tuoyunbu'=>$tyb));
		}else{
			return json_encode(array('result'=>true,'tuoyunbu'=>$tyb));
		}
	}

}
