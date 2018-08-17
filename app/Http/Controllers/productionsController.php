<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Product;
class productionsController extends Controller
{
    /**
     * This method will list products and return clients.productsList view.
     *
     * pubf productsList()
     */
    public function productsList()
    {
        $products = Product::all();
        return view('clients.productsList',compact('products'));
    }
    /**
     * This method shows each product details in a separated page.
     *
     * pubf productsList()
     */
    public function productPage($id)
    {
        $product = Product::where('id',$id)->get();
        return view('clients.productsPage',compact('product'));
    }
    /**
     * This method will list products order by their category
     *
     * pubf productsList()
     */
    public function productsOrderByCat()
    {
    }
}