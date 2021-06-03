<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function store($id)
    {
        if(Cart::where('book_id',$id)->where('order_id',null)->where('user_id',Auth::id())->first()){
            $update = Cart::where('book_id',$id)->where('order_id',null)->first();
            $update['quantity']=$update->quantity+1;
            $update->save();
            return back();
        }else{
            Cart::create([
                'user_id'=> Auth::id(),
                'book_id'=> $id,
            ]);
            return back();
        }
    }


    public function cart_details()
    {
        $carts = Cart::item_cart();
        return view('user.cart.details', compact('carts'));
    }


    public function quantity(Request $request ,$id)
    {
        $cart = Cart::find($id);
        $cart['quantity'] = $request->quantity;
        $cart->save();
        return back();
    }

    public function destroy($id)
    {
        $del = Cart::find($id);
        $del->delete();
        return back();
    }
}
