<?php

namespace App\Http\Controllers\Site;


use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('site.products.index', compact('products'));
    }
    public function cart ()
    {
        return view('site.products.cart');
    }
    public function add_cart(Request $request,$id)
    {
        $product = Product::FindOrFail($id);

        $product = Cart::add($product->id, $product->name, 1 , $product->price)
            ->associate('App\Models\Product');
         session()->flash('success', 'product added to cart successfully');
        return redirect()->back();
    }
    public function update(Request $request, $id)
    {

        $cart = Cart::update($id, $request->quantity);

        return response()->json($cart);

    }

    public function destroy($id)
    {
        $cart = Cart::content()->where('rowId', $id)->first();
        Cart::remove($id);
        return response()->json($cart);

    }
    public function show(Product $product)
    {

        return view('site.products.productDetails',compact('product'));
    }

}
