<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\System;
use Illuminate\Http\Request;

class SystemController extends Controller
{
    public function index()
    {
        //
        $sys = System::gets();
        return response()->json(['status' => 200, 'success' => 'Ok', 'data' => $sys]);
        
    }
}
