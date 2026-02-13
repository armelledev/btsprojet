<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Presence;
use App\Models\User;
use Carbon\Carbon;

class PresnceController extends Controller
{
    public function store(Request $request){
        $request->validate([
           'user_id' => 'required|exists:users,id',    


        ]);

    }
    //
}
