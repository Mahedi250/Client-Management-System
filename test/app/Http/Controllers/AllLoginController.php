<?php

namespace App\Http\Controllers;


use App\allLogin;
use App\Http\Requests\login_req;
use Illuminate\Http\Request;




class AllLoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('login.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function varify(login_req $req)
    {


         $login =allLogin::where('email',$req->username)
           ->where('password',$req->password)->get();



        if(count($login)>0){


           echo "welcome";


        }








    }


    public function create()
    {

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
     * @param  \App\allLogin  $allLogin
     * @return \Illuminate\Http\Response
     */
    public function show(allLogin $allLogin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\allLogin  $allLogin
     * @return \Illuminate\Http\Response
     */
    public function edit(allLogin $allLogin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\allLogin  $allLogin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, allLogin $allLogin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\allLogin  $allLogin
     * @return \Illuminate\Http\Response
     */
    public function destroy(allLogin $allLogin)
    {
        //
    }
}
