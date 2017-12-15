<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Articles;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getIndex() 
    {
        $data = Articles::paginate(10);
        return view('dashboard.index', ['user_data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getCreate()
    {
        return view('dashboard.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $users = new Articles;

        $users->first_name = $request->firstname;
        $users->last_name = $request->lastname;
        $users->sex = $request->gender;
        $users->email = $request->email;
        $users->dob = $request->dob;
        $users->address = $request->address;
        $users->save();
        return redirect('articles');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Articles::find($id);
        return view('dashboard.preview')->with('users', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Articles::find($id);
        return view('dashboard.edit')->with('user', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {   
        $users = new Articles;

        $users->first_name = $request->firstname;
        $users->last_name = $request->lastname; 
        $users->sex = $request->gender;
        $users->email = $request->email;
        $users->dob = $request->dob;
        $users->address = $request->address;
        $users->save();
        return redirect('/');
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