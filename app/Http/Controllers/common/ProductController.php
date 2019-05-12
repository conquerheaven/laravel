<?php namespace App\Http\Controllers\common;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Material;
use App\Product;
use App\Color;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class ProductController extends Controller {

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

    function getColor($id)
    {
        $color = Color::find($id);
        if($color == NULL){
            return "";
        }
        return $color['name'];
    }

    function getMaterial($id)
    {
        $material = Material::find($id);
        if($material == NULL) {
            return "";
        }
        return $material['name'];
    }


	public function getByNameAndIdname()
    {
        $name = Input::get('name');
        $idname = Input::get('idname');
        $pageLimit = Input::get('pageLimit');
        $product = Product::where('name','like','%'.$name.'%')->orWhere('idname','like','%'.$idname.'%')->orderby('name','desc')->take($pageLimit)->get();
        if(count($product) == 0){
            $result = array('result'=>false,'product'=>$product);
            return json_encode($result);
        }else{
            $products = array();
            for($i = 0; $i < count($product); $i++)
            {
                $products[] = array(
                    'ID' => $product[$i]['ID'],
                    'name' => $product[$i]['name'],
                    'idname' => $product[$i]['idname'],
                    'color' => $this::getColor($product[$i]['yanshe']),
                    'material' => $this::getMaterial($product[$i]['caizhi']),
                    'price' => $product[$i]['pfrich']
                );
            }
            $result = array('result'=>true,'product'=>$products);
            return json_encode($result);
        }
    }



}
