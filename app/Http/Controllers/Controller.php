<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function index(){

        return view('product.index',['products'=> Product::get()]);

    }
    
    public function create(){

        return view('create');
        
    } 

    public function store(Request $request){

        //dd($request->all());
        $product = new Product;

        $product->name= $request->name;
        $product->description= $request->description;
        $product->image= $request->image;
        

        $product->save();
        return back()->withSucccess('Product created ...');
    }

    public function edit($id){

      $product = Product::where('id',$id)->first();

      return view('product.edit',['product' => $product]);

    }
    public function delete($id){

        $product = Product::where('id',$id)->first();

        $product->delete();
        return back();
 
     }

     public function update(Request $request ,$id){

        $product = Product::where('id',$id)->first();
        $product->name= $request->name;
        $product->description= $request->description;
        $product->image= $request->image;
        

        $product->save();
        return redirect('/');
       
     }
 

}

