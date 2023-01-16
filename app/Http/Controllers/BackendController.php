<?php

namespace App\Http\Controllers;

use App\Models\Backend;
use Illuminate\Http\Request;

class BackendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Backend::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return Backend::create(['name'=> $request->name,
        'email'=>$request->email,'age'=>$request->age,'address'=>$request->address]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Backend  $backend
     * @return \Illuminate\Http\Response
     */
    public function show(Backend $backend)
    {
        return Backend::find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Backend  $backend
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        return Backend::find($id)->update(['name'=> $request->name,
        'email'=>$request->email,'age'=>$request->age,'address'=>$request->address]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Backend  $backend
     * @return \Illuminate\Http\Response
     */
    public function destroy($backend)
    {
        return Backend::find($id)->delete;
    }
}
