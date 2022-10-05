<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class ProductsController extends Controller
{
    public function allProducts()
    {
        $products = Products::all();
        return response()->json(['products'=>$products],200);
    }
    public function singleProduct($product_id)
    {
        $products = Products::find($product_id);
        return response()->json(['products'=>$products],200);
    }
    public function searchProducts($title)
    {
        $result = Products::where('title', 'LIKE', '%'. $title. '%')->get();
        if(count($result)){
         return Response()->json($result);
        }
        else
        {
        return response()->json(['Result' => 'Product not found'], 404);
      }
    }
    public function allCategories(){
        $products = Products::select('category')->distinct()->get();
        $categories = array();
        foreach($products as $category){
            array_push($categories, $category['category']);
        }
        return response()->json(['categories'=>$categories], 200);
    }

    public function productsCategory($category_name)
    {
        $products = Products::where('category', $category_name)->get();
        return response()->json(['products'=>$products], 200);
    }

    public function addProducts(Request $request)
    {
        $request->validate([
            'title'=>'required',
            'description'=>'required',
            'currency'=>'required',
            'price'=>'required',
            'brand'=>'required',
            'category'=>'required',
            'image'=>'required',

        ]);
        $product = new Products;
        $product ->title = $request->title;
        $product ->description = $request->description;
        $product ->currency = $request->currency;
        $product ->price = $request->price;
        $product ->brand = $request->brand;
        $product ->category = $request->category;
        $product ->image = $request->image;
        $product ->save();
        return response()->json(['message'=>'Product Successfully Added'], 200);
    }

    public function updateProducts(Request $request, $product_id)
    {
        $request->validate([
            'title'=>'required',
            'description'=>'required',
            'currency'=>'required',
            'price'=>'required',
            'brand'=>'required',
            'category'=>'required',
            'image'=>'required'
        ]);
        
        $product = Products::find($product_id);
        {
            $product ->title = $request->title;
            $product ->description = $request->description;
            $product ->currency = $request->currency;
            $product ->price = $request->price;
            $product ->brand = $request->brand;
            $product ->category = $request->category;
            $product ->image = $request->image;
            $product ->update();
            return response()->json(['message'=>'Product Successfully Updated'], 200);
        }
    }

        public function deleteProduct(Request $request, $id)
        {
            $products = Products::find($id);
            $products->delete();
            return response()->json(['message'=>'Product Deleted'], 200);
        }
}
