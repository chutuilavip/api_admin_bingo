<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\GameList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class GameListManagerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = GameList::get();
        return response()->json(['status' => 200, 'success' => 'Ok', 'res' => array('data' => $data)]);
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
        $data = GameList::select('*')->where('gID', $id)->first();
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
        $validator = Validator::make($request->all(), [
            'game_name' => 'required',
            'play_coin' => 'required',
            'reward_fee' => 'required',
        ]);
        
        if ($validator->fails()) {
            return response()->json(['status' => 400, 'errors' => $validator->errors()->all()]);
        }
        
        if (GameList::where('gID', $id)->exists()) {
            $gameList = GameList::find($id);
            
            $dataUp = [
                'game_name' => $request->game_name,
                'reward_fee' => $request->reward_fee,
                'playCoin' => $request->play_coin
            ];
            
            if (!empty($gameList->update($dataUp))) {

                $gameList = GameList::find($id);

                $response = array(
                    'code'      => 200,
                    'status'    => 'success',
                    'data'      => $gameList,
                    'message'   => __('message.success')
                );
            } else {
                $response = array(
                    'code'      => 404,
                    'status'    => 'failed',
                    'message'   => __('message.failed')
                );
            }
        } else {
            $response = array(
                'code'      => 404,
                'status'    => 'failed',
                'message'   => __('message.failed')
            );
        }

        return response()->json($response, $response['code']);
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
