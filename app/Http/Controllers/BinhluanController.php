<?php

namespace App\Http\Controllers;

use App\Binhluan;
use Illuminate\Http\Request;

class BinhluanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function store(Request $req)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Binhluan  $binhluan
     * @return \Illuminate\Http\Response
     */
    public function show(Binhluan $binhluan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Binhluan  $binhluan
     * @return \Illuminate\Http\Response
     */
    public function edit(Binhluan $binhluan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Binhluan  $binhluan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Binhluan $binhluan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Binhluan  $binhluan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Binhluan $binhluan)
    {
        //
    }

    public function comment(Request $req){
        $error = '';
        $email = '';
        $name = '';
        $con_comment = '';

        if(empty($req->name))
        {
            $error = "<p class='text-danger'>Tên không được để trống</p>";
        }
        else{
            $name = $req->name;
        }
        if(empty($req->email))
        {
            $error = "<p class='text-danger'>Email không được để trống</p>";
        }
        else{
            $email = $req->email;
        }
        if(empty($req->con_comment))
        {
            $error = "<p class='text-danger'>Comment không được để trống</p>";
        }
        else{
            $con_comment = $req->con_comment;
        }
        if($error == '')
        {
            $idTour = $req->id;
            $data = $req->all();
            Binhluan::create($data);
            return response() -> json($data);
        }
    }
}
