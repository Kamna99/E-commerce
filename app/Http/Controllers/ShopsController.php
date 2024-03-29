<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Cart;
class ShopsController extends Controller
{
    public function cart_add(){
        //dd(request()->all());
        $pdt=Product::find(request()->pdt_id);
        $cartItem=Cart::add([
            'id'=>$pdt->id,
            'name'=>$pdt->name,
            'qty'=>request()->qty,
            'price'=>$pdt->price
        ]);
        
        Cart::associate($cartItem->rowId,'App\Product');
       // dd($cartItem->rowId);
        //dd(Cart::content());
        return redirect()->route('cart');
    }
    
    public function rapid($id){
        $pdt=Product::find($id);
        $cartItem=Cart::add([
            'id'=>$pdt->id,
            'name'=>$pdt->name,
            'qty'=>1,
            'price'=>$pdt->price
        ]);
        
        Cart::associate($cartItem->rowId,'App\Product');
       
        return redirect()->route('cart');
    }
    
    public function cart(){
       // Cart::destroy();
        return view('cart');
    }
    
    public function cart_delete($id){
        Cart::remove($id);
        return redirect()->back();
        
    }
    
    public function cart_incr($id,$qty){
        Cart::update($id,$qty+1);
        return redirect()->back();
    }
    
    public function cart_decr($id,$qty){
        Cart::update($id,$qty-1);
        return redirect()->back();
    }
}
