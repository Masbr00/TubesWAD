<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Input;
use Illuminate\Http\Request;

class InputanController extends Controller
{
    public function createInputan(Request $request){
        $this->validate($request, [
            'a' => 'required',
            'b' => 'required',
        ]);
        
        Input::create([
            'a' => $request->a,
            'b' => $request->b,
        ]);

        return redirect()->back();
    }
}
