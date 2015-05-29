<?php namespace App\Http\Controllers;

use App\Product;
use App\Category;
use App\Brand;
use App\Material;
use App\Size;
use App\Color;
use App\Http\Requests;
use App\Http\Requests\ProductRequest;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Auth;

class ProductsController extends Controller {

	/**
	 * Display a listing of the products for the customer or for the admin.
	 *
	 * @return Response
	 */
	public function index()
	{
		$products 	=	Product::latest('created_at')->get();

		if (Auth::user()['user_type'] === 0)
		{
			return view('products.list', compact('products'));
		}
		else
		{
			return view('products.products', compact('products'));
		}
	}

	/**
	 * Show the form for creating a new product.
	 *
	 * @return Response
	 */
	public function create()
	{	
		$categories = Category::lists('category', 'id');
		$brands 	= Brand::lists('brand', 'id');
		$materials 	= Material::lists('material', 'id');
		$sizes		= Size::lists('size', 'id');
		$colors		= Color::lists('color', 'id');

		return view('products.create', compact('categories', 'brands', 'materials', 'sizes', 'colors'));
	}

	/**
	 * Store a newly created product in the database.
	 *
	 * @return Response
	 */
	public function store(ProductRequest $request)
	{	
		$image = \Image::make($request->file('productimage'));

		$fileName = $request['name'];
		$fileName = strtolower($fileName);
		$fileName = str_replace(' ', '-', $fileName);
		$fileName = $fileName . '-' . time() . '.jpg';

		$imagePath = '/images/products/'.$fileName;

		$image->fit(250);

		$image->save(public_path() . $imagePath);

		$request['imagePath'] = $imagePath;

		$product = Product::create($request->all());

		$product->sizes()->attach($request->input('size_list'));

		$product->colors()->attach($request->input('color_list'));

		flash()->success('Uw product ' . $request['name'] . ' is succesvol toegevoegd!');

		return redirect('admin');
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
	public function edit(Product $product)
	{	
		$categories = Category::lists('category', 'id');
		$brands 	= Brand::lists('brand', 'id');
		$materials 	= Material::lists('material', 'id');
		$sizes		= Size::lists('size', 'id');
		$colors		= Color::lists('color', 'id');

		return view('products.edit', compact('product', 'categories', 'materials', 'brands', 'sizes', 'colors'));
	}

	/**
	 * Update the specified product in the database.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Product $product, ProductRequest $request)
	{
		$product->update($request->all());

		$product->sizes()->sync($request->input('size_list'));

		$product->colors()->sync($request->input('color_list'));

		$products 	=	Product::latest('created_at')->get();
		return view('products.list', compact('products'));
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy(Product $product)
	{
		$product->delete();

		flash()->success('Uw product "' . $product['name'] . '" is verwijderd');

		$products 	=	Product::latest('created_at')->get();
		return view('products.list', compact('products'));
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function delete($id)
	{	
		$product = Product::findOrFail($id);
		$product->delete($id);

		flash()->success('Uw product "' . $product['name'] . '" is verwijderd');

		$products 	=	Product::latest('created_at')->get();
		return view('products.list', compact('products'));
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
