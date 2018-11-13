<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employeds;
use App\Customers;
use App\Persons;
use App\Nationalities;
class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $persons= Persons::all();
        $clients= Customers::all();
        $employeds= Employeds::all();
        $nationalities= Nationalities::all();
        return view('admin.customers.index')->with(["persons"=>$persons,"clients"=>$clients,"employeds"=>$employeds,"nationalities"=>$nationalities]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Persons::create([

            'name'=>$request->name,
            'lastname'=>$request->lastname,
            'dni'=>$request->dni,
            'birth'=>$request->birth,
            'adress'=>$request->adress,
            'sex'=>$request->sex,
            'civil_state'=>$request->civilstate,
            'nationality_id'=>$request->nationality

        ]);

        $customer = Persons::all()->last();
        $flag = 1;

        Employeds::create([
            'data_employed_id' => $flag
        ]);

        Customers::create([
            'data_customer_id' => $customer->id,
            'seller_id' => $flag
        ]);

        $persons= Persons::all();
        $clients= Customers::all();
        $employeds= Employeds::all();
        $nationalities= Nationalities::all();

        return redirect()->back();


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $cond = $request->code;
        Persons::where('id',$cond)->update([

            'name'=>$request->name,
            'lastname'=>$request->lastname,
            'dni'=>$request->dni,
            'birth'=>$request->birth,
            'adress'=>$request->adress,
            'sex'=>$request->sex,
            'civil_state'=>$request->civilstate,
            'nationality_id'=>$request->nationality

        ]);

        Customers::where('data_customer_id',$cond)->update([

            'seller_id' => $request->seller

        ]);



        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        $cond = $request->code;

        Persons::where('id',$cond)->delete();

        return redirect()->back();
    }
}
