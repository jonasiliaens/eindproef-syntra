<?php namespace App\Http\Controllers;

use App\Order;
use App\Product;
use App\Category;
use App\Brand;
use App\Material;
use App\Size;
use App\Color;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;

use Illuminate\Http\Request;

class OrdersController extends Controller {

	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Display a listing of all the products in the shoppingcart.
	 *
	 * @return Response
	 */
	public function shoppingcart()
	{	
		$user = Auth::user();
		$orderId = Auth::user()->orders()->where('sent', 0)->get();
		
		if (count($orderId))
		{
			$order = Order::where('user_id', '=', $user->id)->firstOrFail();
			$products = $order->products()->get();
			$sizes = Size::lists('size', 'id');
			$colors	= Color::lists('color', 'id');
		}
		else
		{
			$order = null;
		}
		

		return view('shoppingcart.shoppingcart', compact('user', 'order', 'products', 'sizes', 'colors'));
	}

	/**
	 * Add a product to the order.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function addToShoppingcart($id)
	{	
		$userId = Auth::user()->id;
		$orderId = Auth::user()->orders()->where('sent', 0)->get();
		$product = Product::find($id);

		if (count($orderId))
		{	
			$order = Order::where('user_id', '=', $userId)->firstOrFail();

			if (!$order->products->contains($product))
			{
				$order->total = $order->total + $product->price;
				$order->update();
				$order->products()->attach($id);

				flash()->success($product->name . ' is aan het winkelmandje toegevoegd!');
			}
			else
			{
				flash()->error($product->name . ' zit al in uw winkelmandje!');
			}
			
			return redirect('producten');
		}
		else
		{
			$order = new Order;
			$order->user_id = $userId;
			$order->total = $product->price;
			$order->save();
			$order->products()->attach($id);

			flash()->success($product->name . ' is aan het winkelmandje toegevoegd!');
			return redirect('producten');
		}
	}


	/**
	 * Remove all the products from the shoppingcart.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function deleteAllFromShoppingcart()
	{
		$userId = Auth::user()->id;
		$order = Order::where('user_id', '=', $userId)->firstOrFail();
		$order->delete();

		return redirect('winkelmandje');
	}

	/**
	 * Remove the specified product from the shoppingcart.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function deleteFromShoppingcart($id)
	{
		$userId = Auth::user()->id;
		$order = Order::where('user_id', '=', $userId)->firstOrFail();
		$order->products()->detach($id);

		if (is_null($order->products()))
		{
			$order->delete();
			return redirect('winkelmandje');
		}
		else
		{
			return redirect('winkelmandje');
		}

		
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

	

}
