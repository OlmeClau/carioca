<?php

namespace App\Http\Controllers;



use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateSaleRequest;

use Request;
use App\Sale;
use App\Client;
use App\Product;
use App\Detail;

class SaleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //

        $sales = Sale::all();
        return view('sales.index', compact('sales'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()

    {
        $clients=Client::all([ 'name']);
        return view('sales.create',compact('clients'));
       

    }






    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(CreateSaleRequest $request)
    {
          $new = $request->input('client_id') + 1;
        $request->replace(array('client_id' => $new));        
         Sale::create($request->all());


          $sale_id = $request->input('id') ;
          $sales= Sale::all();
          $clients = Client::all();
           $products= Product::all();
        $details= Detail::all();
        $products_select= Product::all(['name']);
        $aux=0;
          foreach ($sales as $sale) {
              # code...
            if ($sale->id == $sale_id) {
                # code...
        
         return view('sales.show', compact('sale', 'clients','products','details', 'aux', 'products_select'));


            }
          }

         
        return view('sales.show', compact('sale', 'clients','products','details', 'aux', 'products_select'));

    }






     


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $sale = Sale::find($id);
        //return view('posts.show', compact('post'));
        $products= Product::all();
        $details= Detail::all();
        $products_select= Product::all(['name']);


        $aux=0;

        $clients = Client::all();

        return view('sales.show', compact('sale', 'clients','products','details', 'aux', 'products_select'));


    
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
   public function destroy($id)
    {
        Sale::destroy($id);
        return redirect('sales');
    }
}
