<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use Illuminate\Support\Facades\DB;


class ClientController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index()
    {
      $clients = Client::latest()->paginate(5);

      return view('client.index', compact('clients'));
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function create()
    {
        return view("client.create");
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function store(Request $request)
    {

        $input = $request->all();

        Client::create($input);

        return redirect()->route('client.index');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function edit($id)
    {
       $client = Client::find($id);

       return view('client.update',compact('client'));
    }

    /**
     * Write code on Method
     *
     * @return response()
     */

    public function update(Request $request , $id)
    {
        $input = $request->all();

        $update = Client::find($id);
        $update->update($input);

        return redirect()->route('client.index');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */

    public function show($id)
    {
        $client = Client::find($id);

        return view('client.show', compact('client'));
    }

    /**
     * Write code on Method
     *
     * @return response()
     */

    public function destory(Request $request,$id)
    {
        $input = $request->all();

        $client = Client::find($id);

        $client->delete($input);

        return redirect()->route('client.index');
    }
    /**
     * Write code on Method
     *
     * @return response()
     */


}
