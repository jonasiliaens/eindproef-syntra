<?php namespace App\Http\Controllers;

use App\Product;
use App\Http\Requests;
use App\Http\Requests\ProductRequest;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ProductsController extends Controller {

	/**
	 * Display a listing of the products.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('products.products');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('products.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(ProductRequest $request)
	{	
		Product::create($request->all());

		flash()->success('Uw product ' . $request['name'] . ' is succesvol toegevoegd!');

		return view('products.create');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show()
	{
		return view('products.product');
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

	/**
	 * Save a new product
	 * 
	 * @param  ArticleRequest $request [description]
	 * @return [type]                  [description]
	 */
	private function createProduct(ProductRequest $request)
	{
		$product = products()->create($request->all());

		return $product;
	}

}
