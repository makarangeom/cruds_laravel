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

    public function messages()
    {
        return [
            'email.required' => 'Email is required!',
            'first_name.required' => 'Name is required!',
            'last_name.required' => 'Password is required!'
        ];
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
        // $user = Articles::where('email', $request->email)->first();

        $this->validate($request,[
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|email|unique:table_users',
            'dob' => 'required',
            'address' => 'required|min:3|max:20',
        ],[
            'firstname.required' => ' The first name field is required.',
            'lastname.required' => ' The last name field is required.',
            'address.required' => ' The address field is required.',
            'address.min' => ' The address must be at least 5 characters.',
            'address.max' => ' The address may not be greater than 100 characters.',
        ]);

        $users->first_name = $request->firstname;
        $users->last_name = $request->lastname;
        $users->sex = $request->gender;
        $users->email = $request->email;
        $users->dob = $request->dob;
        $users->address = $request->address;
        $users->save();
        return redirect('articles')->with('success', 'You have create a new recode successfully!');
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
        $users = Articles::find($request->id);
        // var_dump($request->id);
        $users->first_name = $request->firstname;
        $users->last_name = $request->lastname; 
        $users->sex = $request->gender;
        $users->email = $request->email;
        $users->dob = $request->dob;
        $users->address = $request->address;
        $users->save();
        return redirect('articles')->with('success', 'You have update this recode successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Articles::where('id',$id)->delete();
        return redirect('articles')->with('success', 'You have delete this recode successfully!');
    }
}
