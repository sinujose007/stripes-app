<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\User;
use DB;
use Stripe;
use Session;
use Exception;

class ProductsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application products listing page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = Products::paginate(3);
        return view('products',compact('data'));
    }
	
	/**
     * Show the product page details.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function buy($id)
    {
       $data = DB::table('products')->where('id', $id)->first(); 
	   return view('single',compact('data'));
    }
	
	/**
     * Payment through checkout
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
	public function checkout(Request $request)
    {
		
		$user = auth()->user();
		$token =  $request->stripeToken;
		$paymentMethod = $request->paymentMethod;
		$amount = $request->Amount;
		try {
			
			Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
			if (is_null($user->stripe_id)) {
                $stripeCustomer = $user->createAsStripeCustomer();
            }
			Stripe\Charge::create ([
                "amount" => $amount* 100,
                "currency" => "inr",
                "source" => $request->stripeToken,
                "description" => "Make payment and buy product." 
			]);
			return back()->with('success','Payment successfully made.');
			
		} catch (Exception $e) {
			
			return back()->with('success',$e->getMessage());		
		}		
    }
}
