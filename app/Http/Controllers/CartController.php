<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sale;

class CartController extends Controller
{
    public function shop()
    {
        $products = Sale::all();
        return view('shop', compact('products'));
    }

    public function cart()
    {
        return view('dashboard.cart.cart');
    }

    public function addToCart($id)
    {
        $product = Sale::findOrFail($id); // Usamos Sale en lugar de Product
        
        $cart = session()->get('cart', []);
        
        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "name" => $product->name,
                "quantity" => 1,
                "price" => $product->total, // Usamos total en lugar de price
            ];
        }
        
        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Producto agregado al carrito!');
    }
}
