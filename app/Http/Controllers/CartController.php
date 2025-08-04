<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'product_id' => 'required',
            'quantity' => 'required|integer|min:1',
        ]);
        $data['user_id'] = auth()->id();
        //if already in cart, update quantity
        $existingCart = Cart::where('user_id', $data['user_id'])
            ->where('product_id', $data['product_id'])
            ->first();
        if ($existingCart) {
            $existingCart->quantity = $data['quantity'];
            $existingCart->save();
            
            if ($request->expectsJson()) {
                return response()->json(['success' => true, 'message' => 'Cart updated successfully.']);
            }
            return back()->with('success', 'Cart updated successfully.');
        }
        Cart::create($data);
        
        if ($request->expectsJson()) {
            return response()->json(['success' => true, 'message' => 'Product added to cart successfully.']);
        }
        return back()->with('success', 'Product added to cart successfully.');
    }

    public function mycart()
    {
        $carts = Cart::where('user_id', auth()->id())->get();
        //if the stock is less than the quantity in cart,update the qauntity the quantity
        foreach ($carts as $cart) {
            $product = $cart->product;
            if ($product && $product->stock < $cart->quantity) {
                $cart->quantity = $product->stock; // Update to available stock
                $cart->save();
            }
        }
        return view('mycart', compact('carts'));

    }


    /**
     * Display the specified resource.
     */
    public function show(Cart $cart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cart $cart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request,$id)
    {
        $cart =Cart::where('user_id', auth()->id())
            ->where('id', $id)
            ->first();
        if ($cart) {
            $cart->delete();
            return back()->with('success', 'Cart item removed successfully.');
        }
        return back()->with('success', 'Cart item not found.');
    }
    
    /**
     * Get the cart count for the authenticated user
     */
    public function count(Request $request)
    {
        $count = Cart::where('user_id', auth()->id())->sum('quantity');
        return response()->json(['count' => $count]);
    }
    
}
