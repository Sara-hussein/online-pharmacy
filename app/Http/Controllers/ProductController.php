<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\facades\url;
use Illuminate\support\facades\DB;
//use App\Product;
use App\products;
class ProductController extends Controller
{
    

     public function store(Request $request)
    {  $products = new products();
        $products->Product_name = $request->input('Product_name');
        $products->price = $request->input('price');

        if($request->hasfile('image')){

            $file =$request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename= time() . '.' . $extension;
            $file->move('product/' ,$filename);
            $products->image =$filename;
        } 
                
         $products->save();
        return redirect ('AdminPages.delete');
    }
          
    public function LoadDb()
    {
        $products = DB::select('select * from products');
        return view('AdminPages.delete',['products'=>$products]);

    }
     public function InsertToDb()
    {
        $products = DB::select('select * from products');
        return view('UserPages.index',['products'=>$products]);
    }
    
     public function delete($id)
    {
        DB::delete('delete from products where id = ?',[$id]);
        return redirect('AdminPages.delete')->with('success','datadelete');
    }


        
}
