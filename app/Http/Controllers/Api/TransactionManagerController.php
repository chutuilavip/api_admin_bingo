<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionManagerController extends Controller
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

        $data = Transaction::select('transaction.*', 'accountdata.NickName')
            ->join('accountdata', 'transaction.account', '=', 'accountdata.UserID')
            ->where('status', 'success')
            ->paginate($limit);

        $total = Transaction::join('accountdata', 'transaction.account', '=', 'accountdata.UserID')
        ->where('status', 'success')
        ->selectRaw('count(transaction.account) as total')
        ->first();

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
        $data = Transaction::select('transaction.*', 'accountdata.NickName')->where('id', $id)->where('transaction.status', 'success')->join('accountdata', 'transaction.account', '=', 'accountdata.UserID')->first();

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
