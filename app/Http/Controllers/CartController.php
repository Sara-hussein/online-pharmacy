<?php

namespace App\Http\Controllers;
use App;
use Illuminate\Http\Request;
use Illuminate\support\facades\url;
use Illuminate\support\facades\DB;
use App\Cart;
use App\products;

class CartController extends Controller
{
    public function index()
    {

        return view ('UserPages.index');
    }
    public function store($ProdId)
    {
       $products=products::whereid($ProdId)->first();


      $Carts = new Cart([

        'Prod_Name' => $products->Product_name,
         'Prod_Price' => $products->price,
         'Prod_img' => $products->image,
       ]);
       $Carts->save();


        return redirect ('UserPages.index');
    }

    public function viewcart()
    {
        $Cart = DB::select('select * from carts');
        return view('UserPages.viewcart',['Cart'=>$Cart]);

    }
    public function delete($id)
   {
       DB::delete('delete from carts where id = ?',[$id]);
       return view('UserPages.viewcart',['Cart' => Db::select('select  * from carts' )]);
   }
}
