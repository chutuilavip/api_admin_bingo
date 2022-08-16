<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;

class BannerController extends Controller
{
    public function index(Request $request)
    {
        $data = Banner::select('*')->where('status', 1)->get();

        return response()->json(['status' => 200, 'success' => 'Ok', 'data' => $data]);
    }
}
