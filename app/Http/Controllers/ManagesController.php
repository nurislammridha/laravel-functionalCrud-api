<?php

namespace App\Http\Controllers;

use App\Models\manage;
use Illuminate\Http\Request;

class ManagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return manage::orderBy('id', 'desc')->get();
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $task = manage::create($request->all());
        return $task;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return manage::find($id);
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
        $manage = manage::find($id);
        if ($manage) {
            $manage->update($request->all());
            return response(['status' => true, 'data' => $manage, 'message' => 'Data has been Updated !']);
        } else {
            return response(['status' => false, 'data' => false, 'message' => 'Sorry Something went wrong !']);
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
        $manage = manage::find($id);
        if ($manage) {
            $manage->delete();
            return response(['status' => true, 'data' => $manage, 'message' => 'Data has been deleted succesfully']);
        } else {
            return response(['status' => false, 'data' => $manage, 'message' => 'Faile! Something went wrong']);
        }
    }
}
