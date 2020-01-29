<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\visitor;
use Validator;

class visitorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $visitors = visitor::all();
        return response()->json($visitors);

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
       $validator = Validator::make($request->all(),[
           'firstname' => 'required',
           'lastname' => 'required',
           'number' => 'required',
           'email' => 'required',
           'profession' => 'required',
           'host' => 'required',
           'purpose' => 'required'
           
       ]);

       if($validator->fails()){
           $response = array('response' => $validator->messages(), 'success' => false);
           return $response;
       }else{

           // create input
           $visitor = new visitor;

           $visitor->firstname = $request->input('firstname');
           $visitor->lastname = $request->input('lastname');
           $visitor->number = $request->input('number');
           $visitor->email = $request->input('email');
           $visitor->profession = $request->input('profession');
           $visitor->host = $request->input('host');
           $visitor->purpose = $request->input('purpose');  
        
           $visitor->save();

           return response() ->json($visitor);

       }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $visitor = visitor::find($id);
        return response()->json($visitor);
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
        $validator = Validator::make($request->all(),[
            'firstname' => 'required',
            'lastname' => 'required',
            'number' => 'required',
            'email' => 'required',
            'profession' => 'required',
            'host' => 'required',
            'purpose' => 'required'
            
        ]);
 
        if($validator->fails()){
            $response = array('response' => $validator->messages(), 'success' => false);
            return $response;
        }else{
 
            // update input
            $visitor = visitor::find($id);
 
            $visitor->firstname = $request->input('firstname');
            $visitor->lastname = $request->input('lastname');
            $visitor->number = $request->input('number');
            $visitor->email = $request->input('email');
            $visitor->profession = $request->input('profession');
            $visitor->host = $request->input('host');
            $visitor->purpose = $request->input('purpose');  
         
            $visitor->save();
 
            return response() ->json($visitor);
 
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $visitor = visitor::find($id);
        $visitor->delete();
        $response = array('response' => 'Visitor Deleted', 'success' => true);
        return $response;


    }
}
