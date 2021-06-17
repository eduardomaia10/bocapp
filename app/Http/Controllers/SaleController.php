<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sale;
use Illuminate\Support\Facades\DB;


class SaleController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index()
    {
      $sales = Sale::latest()->paginate(10);

      return view('sale.index', compact('sales'));
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function create()
    {
        return view("sale.create");
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function store(Request $request)
    {

        $input = $request->all();

        Sale::create($input);

        return redirect()->route('sale.index');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function edit($id)
    {
       $sale = Sale::find($id);

       return view('sale.update',compact('sale'));
    }

    /**
     * Write code on Method
     *
     * @return response()
     */

    public function update(Request $request , $id)
    {
        $input = $request->all();

        $update = Sale::find($id);
        $update->update($input);

        return redirect()->route('sale.index');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */

    public function show($id)
    {
        $sale = Sale::find($id);

        return view('sale.show', compact('sale'));
    }

    /**
     * Write code on Method
     *
     * @return response()
     */

    public function destory(Request $request,$id)
    {
        $input = $request->all();

        $sale = Sale::find($id);

        $sale->delete($input);

        return redirect()->route('sale.index');
    }
    /**
     * Write code on Method
     *
     * @return response()
     */


}
