<?php namespace App\Http\Controllers;

use App\User;
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
	 * Display a listing of all the orders from the authenticated user.
	 *
	 * @return Response
	 */
	public function orders()
	{	
		$user = Auth::user();
		$orders = $user->orders()->get();

		return view('users.orders', compact('user','orders'));
	}

	/**
	 * Display a listing of all the products in the shoppingcart.
	 *
	 * @return Response
	 */
	public function shoppingcart()
	{	
		$user = Auth::user();
		$orderId = Auth::user()->orders()->where('sent', 0)->where('paid', 0)->get();
		
		if (count($orderId))
		{
			$order = Order::where('user_id', '=', $user->id)->where('sent', 0)->where('paid', 0)->firstOrFail();
			$products = $order->products()->get();

			if ($order->finalize === 0)
			{
				return view('shoppingcart.shoppingcart', compact('user', 'order', 'products'));
			}
			else
			{
				return view('shoppingcart.finalizeOrder', compact('user', 'order', 'products'));
			}		
		}
		else
		{
			$order = null;
			return view('shoppingcart.shoppingcart', compact('user', 'order', 'products'));
		}

		
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
		$orderId = Auth::user()->orders()->where('sent', 0)->where('paid', 0)->get();
		$product = Product::find($id);

		if (count($orderId))
		{	
			$order = Order::where('user_id', '=', $userId)->where('sent', 0)->where('paid', 0)->firstOrFail();

			if ($order->finalize === 0)
			{
				$order->total = $order->total + $product->price;
				$order->update();
				$order->products()->attach($id);

				flash()->success($product->name . ' is aan het winkelmandje toegevoegd!');
			}
			else
			{
				flash()->error('Uw bestelling is al in finalisatie status, ga naar het winkelmandje om dit te veranderen!');
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
		$order = Order::where('user_id', '=', $userId)->where('sent', 0)->where('paid', 0)->firstOrFail();
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
		$order = Order::where('user_id', '=', $userId)->where('sent', 0)->where('paid', 0)->firstOrFail();
		$product = Product::find($id);

		$order->total = $order->total - $product->price;
		$order->update();
		$order->products()->detach($id);

		if (count($order->products) === 0)
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
	 * Finalize the order.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function finalizeOrder(Request $request)
	{
		$user = Auth::user();
		$order = Order::where('user_id', '=', $user->id)->where('sent', 0)->where('paid', 0)->firstOrFail();
		$order->finalize = true;
		$order->update();
		$products = $order->products()->get();
		
		return view('shoppingcart.finalizeOrder', compact('user', 'order', 'products'));
	}

	/**
	 * Go back from finalize to the shoppingcart.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function backToShoppingcart($id)
	{
		$order = Order::find($id);
		$order->finalize = false;
		$order->update();
		
		return redirect('winkelmandje');
	}

	/**
	 * Bring the user to the payment confirmation screen.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function confirmPay($id)
	{
		$order = Order::find($id);
		
		return view('shoppingcart.confirmpay', compact('order'));
	}

	/**
	 * Handle the payment of the order.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function payOrder($id)
	{
		$order = Order::find($id);
		$order->paid = true;
		$order->update();
		
		
		return redirect('winkelmandje');
	}



	

}
