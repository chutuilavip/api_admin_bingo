<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\UserOwnedRecord;
use Illuminate\Http\Request;

class HistoryPlayManagerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if (!empty($request->input('limit'))) {
            $limit = $request->input('limit');
        } else {
            $limit = 10;
        }

        $data = UserOwnedRecord::select('userowned_record.*', 'accountdata.NickName')
            ->join('accountdata', 'userowned_record.uID', '=', 'accountdata.uID')
            ->paginate($limit);
            
        $total = UserOwnedRecord::join('accountdata', 'userowned_record.uID', '=', 'accountdata.uID')->selectRaw('count(userowned_record.uID) as total')->first();

        return response()->json(['status' => 200, 'success' => 'Ok', 'res' => array('total' => $total->total, 'data' => $data)]);
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $data = UserOwnedRecord::select('userowned_record.*', 'accountdata.NickName')->where('tID', $id)->join('accountdata', 'userowned_record.uID', '=', 'accountdata.uID')->first();

        return response()->json(['status' => 200, 'success' => 'Ok', 'res' => array('data' => $data)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
