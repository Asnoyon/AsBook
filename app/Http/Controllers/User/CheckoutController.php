<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use Illuminate\Http\Request;
use App\Models\Checkout;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
   public function store(Request $request)
   {
    $checkout = new Checkout;
    $checkout['name'] = $request->name;
    $checkout['email'] = $request->email;
    $checkout['phone'] = $request->phone;
    $checkout['payment_name'] = $request->payment_name;
    $checkout['payment_number'] = $request->payment_number;
    $checkout['payment_secret'] = $request->payment_secret;
    $checkout['location'] = $request->location;
    $checkout['user_id'] = Auth::id();
    $checkout['description'] = $request->description;
  $checkout->save();
  foreach (Cart::item_cart() as $cart) {
          $cart['order_id']=$checkout->id;
          $cart->save();
  }
    return redirect('/');
   }
}
