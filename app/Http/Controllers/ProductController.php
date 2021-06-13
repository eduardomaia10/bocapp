<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\DB;


class ProductController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index()
    {
      $products = Product::latest()->paginate(5);

      return view('product.index', compact('products'));
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function create()
    {
        return view("product.create");
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function store(Request $request)
    {

        $input = $request->all();

        Product::create($input);

        return redirect()->route('product.index');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function edit($id)
    {
       $product = Product::find($id);

       return view('product.update',compact('product'));
    }

    /**
     * Write code on Method
     *
     * @return response()
     */

    public function update(Request $request , $id)
    {
        $input = $request->all();

        $update = Product::find($id);
        $update->update($input);

        return redirect()->route('product.index');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */

    public function show($id)
    {
        $product = Product::find($id);

        return view('product.show', compact('product'));
    }

    /**
     * Write code on Method
     *
     * @return response()
     */

    public function destory(Request $request,$id)
    {
        $input = $request->all();

        $product = Product::find($id);

        $product->delete($input);

        return redirect()->route('product.index');
    }
    /**
     * Write code on Method
     *
     * @return response()
     */


}
