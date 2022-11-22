<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){

        $products = Product::inRandomOrder()->paginate(12);
        return view('home',compact('products'));
    }

    public function list(Category $category,Request $request){

        #dd($category->products);
        $products = $category->products;
       
        return view('list',compact('products'));
    }

    public function search(Request $request){

        $q = $request->get('q');
        
        $products = Product::where('name','LIKE',"%$q%")
        ->when(is_numeric($q),function($query) use($q){
            $id = (int) $q;
            return $query->orWhere('id',$id);
        })
        #->toSql()
        ->get()
        ;

        #dd($products);

        return view('list',compact('products'));
    }




}
