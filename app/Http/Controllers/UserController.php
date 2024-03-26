<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::paginate(10);
        // foreach($users as $user){
        //     echo $user->name ."<br>";
        // }


        // return $users;
        return view('alluser', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('adduser');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return $request;

        // $user = new User;

        // $user->name = $request->name;
        // $user->email = $request->email;
        // $user->password = $request->password;
        // $user->city = $request->city;
        // $user->age = $request->age;

        // $user->save();

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'city' => $request->city,
            'age' => $request->age,

        ]);

            return redirect()->route('user.index')
                            ->with('status', 'New User Added Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(String $user)
    {
        $users = User::find($user);

        // return $users;
        return view('viewuser', compact('users'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        $users = User::find($user->id);

        return view('update', compact('users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // $user = User::find($id);

        // $user->name = $request->name;
        // $user->email = $request->email;
        // $user->password = $request->password;
        // $user->city = $request->city;
        // $user->age = $request->age;

        // $user->save();

        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'age'=> 'required|numeric',
            'city' => 'required',
            'password' => 'required'
        ]);

        $user = User::where('id',$id)
                ->update([
                    'name' => $request->name,
                    'email' => $request->email,
                    'password' => $request->password,
                    'city' => $request->city,
                    'age' => $request->age
                ]);

        return redirect()->route('user.index')
                            ->with('status', 'User '. $request->name .' Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // $users = User::find($id);
        // $users->delete();

        User::destroy($id);

        return redirect()->route('user.index')
                            ->with('status', 'User Deleted Successfully');
    }
}