<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class PersonnelController extends Controller
{
    public function personnel(Request $request){
        $request->validate([
            'full_name' => 'required|stringmax:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8',
            'category_id' => 'required|exists:categories,id',
        ]);
        $user = User::create([
            'name' => $request->full_name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        $user->personnels()->create([
            'category_id' => $request->category_id,
            'full_name' =>$request->full_name,
           'age' => $request->age,
           'phone' => $request->phone,
           'neighborhood' => $request->neighborhood,
        ]);
        return redirect()->back()->with('success', 'Staff created successfully!');
    }

}
