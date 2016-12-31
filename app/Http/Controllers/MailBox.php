<?php

namespace App\Http\Controllers;

use App\Messages;
use Illuminate\Http\Request;

class MailBox extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Messages::whereNull('archived_at')->paginate(5);
    }
    /**
     * Display a listing  of archived  resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function archived()
    {
        return Messages::whereNotNull('archived_at')->paginate(5);
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Messages::where('uid',$id)->first();
    }

    public function read($id)
    {
        if(Messages::where('uid',$id)->update(['read_at'=>time()])){
            return ['success'=>true];
        }
        return ['success'=>false];
    }
    public function archive($id)
    {
        if(Messages::where('uid',$id)->update(['archived_at'=>time()])){
            return ['success'=>true];
        }
        return ['success'=>false];
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
