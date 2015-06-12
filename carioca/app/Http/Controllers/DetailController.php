<?php

namespace App\Http\Controllers;



use App\Http\Requests;
use App\Http\Controllers\Controller;







use App\Http\Requests\CreateDetailRequest;

use Request;
use App\Sale;
use App\Detail;
use App\Product;
use App\Client;
class DetailController extends Controller
{
    public function index()
    {
        //

        $details = Detail::all();
        return view('details.index', compact('details'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()

    {
    }






    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(CreateDetailRequest $request)
    {
          //$new = $request->input('product_id') + 1;
        //$request->replace(array('product_id' => $new));
           Detail::create($request->all());
           $products= Product::all();
          $sale_id = $request->input('sale_id');   
            $sales= Sale::all();
          $clients = Client::all();

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
        $details= Detail::all();
        $sale_id=0;
         $sales= Sale::all();
          $clients = Client::all();


          $products= Product::all();
       
        $products_select= Product::all(['name']);


        $aux=0;
        foreach ($details as $detail) {
            # code...
            if ($id == $detail->id) {
                $sale_id = $detail->sale_id;
                 Detail::destroy($id);
                 $details= Detail::all();
                 foreach ($sales as $sale) {
              # code...
                        if ($sale->id == $sale_id) {
                            # code...
                    
                     return view('sales.show', compact('sale', 'clients','products','details', 'aux', 'products_select'));


                        }
                }
                # code...
            }
        }

               
       
    }
}
