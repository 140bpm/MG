<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employeds;
use App\Nationalities;
use App\Persons;
use App\Customers;

class EmployedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $employeds = Employeds::all();
        $nations= Nationalities::all();
        return view('admin.employeds.index')->with(["employeds"=>$employeds,"nations"=>$nations]);
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

        $employeds = Persons::all()->last();

        Employeds::create([
            'data_employed_id'=> $employeds->id,
            'employedcode'=>'2',
            'totalsells'=> 1
        ]);

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
        //
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
        Persons::where('id',$request->code)->update([
            'name'=>$request->name,
            'lastname'=>$request->lastname,
            'dni'=>$request->dni,
            'birth'=>$request->birth,
            'adress'=>$request->adress,
            'sex'=>$request->sex,
            'civil_state'=>$request->civilstate,
            'nationality_id'=>$request->nationality
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
        Persons::where('id',$request->code)->delete();
        return redirect()->back();
    }


}
