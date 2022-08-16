<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\GameConfig;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class GameManagerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = GameConfig::get();
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
        //
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
    public function update(Request $request)
    {
        // $validator = Validator::make($request->all(), [
        //     'play_time' => 'numeric|required',
        //     'cool_time' => 'numeric|required',
        //     'pick_score' => 'numeric|required',
        //     'bingo_score' => 'numeric|required',
        //     'over_score' => 'numeric|required',
        //     'league_fee' => 'numeric|required',
        //     'league_join_price' => 'numeric|required',
        //     'league_play_price' => 'numeric|required',
        // ]);
        
        // if ($validator->fails()) {
        //     return response()->json(['status' => 400, 'errors' => $validator->errors()->all()]);
        // }
        
        $dataUp = [
            'playTime' => $request->play_time,
            'coolTime' => $request->cool_time,
            'number_pick_score' => $request->pick_score,
            'number_bingo_score' => $request->bingo_score,
            'number_combo_score' => $request->over_score,
            'league_join_price' => $request->league_join_price,
            'league_play_price' => $request->league_play_price,
            'league_reward_fee' => $request->league_fee
        ];
        $update = GameConfig::where(DB::raw('1'), '=', '1')->update($dataUp);

        $gameConfig = GameConfig::get();
        $response = array(
            'code'      => 200,
            'status'    => 'success',
            'data'      => $gameConfig,
            'message'   => __('message.success')
        );
        // } else {
        //     $response = array(
        //         'code'      => 404,
        //         'status'    => 'failed',
        //         'message'   => __('message.failed')
        //     );
        // }

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
