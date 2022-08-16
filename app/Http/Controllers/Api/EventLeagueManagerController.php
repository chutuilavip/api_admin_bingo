<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\EventLeague;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class EventLeagueManagerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = EventLeague::get();
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
    public function update(Request $request, $id)
    {
        //
        $validator = Validator::make($request->all(), [
            'event_name' => 'required',
            'req_start_date' => 'required|date_format:Y-m-d',
            'req_start_hour' => 'required',
            'req_start_minute' => 'required',
            'league_start_date' => 'required|date_format:Y-m-d',
            'league_start_hour' => 'required',
            'league_start_minute' => 'required',
            'league_end_date' => 'required|date_format:Y-m-d',
            'league_end_hour' => 'required',
            'league_end_minute' => 'required',
            'req_gold' => 'required',
            'req_play_coin' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['status' => 400, 'errors' => $validator->errors()->all()]);
        }

        if (EventLeague::where('eventID', $id)->exists()) {

            $event_name = $request->event_name;
            $req_start_date = $request->req_start_date;
            $req_start_hour = $request->req_start_hour;
            $req_start_minute = $request->req_start_minute;
            $league_start_date = $request->league_start_date;
            $league_start_hour = $request->league_start_hour;
            $league_start_minute = $request->league_start_minute;
            $league_end_date = $request->league_end_date;
            $league_end_hour = $request->league_end_hour;
            $league_end_minute = $request->league_end_minute;
            $req_gold = $request->req_gold;
            $req_play_coin = $request->req_play_coin;

            if (mb_strlen($req_start_hour) == 1) $req_start_hour = "0" . $req_start_hour;
            if (mb_strlen($req_start_minute) == 1) $req_start_minute = "0" . $req_start_minute;
            if (mb_strlen($league_start_hour) == 1) $league_start_hour = "0" . $league_start_hour;
            if (mb_strlen($league_start_minute) == 1) $league_start_minute = "0" . $league_start_minute;
            if (mb_strlen($league_end_hour) == 1) $league_end_hour = "0" . $league_end_hour;
            if (mb_strlen($league_end_minute) == 1) $league_end_minute = "0" . $league_end_minute;

            $req_start = date("Y-m-d H:i:s", strtotime($req_start_date . " " . $req_start_hour . ":" . $req_start_minute . ":00"));
            $league_start = date("Y-m-d H:i:s", strtotime($league_start_date . " " . $league_start_hour . ":" . $league_start_minute . ":00"));
            $league_end = date("Y-m-d H:i:s", strtotime($league_end_date . " " . $league_end_hour . ":" . $league_end_minute . ":00"));

            $req_end = date("Y-m-d H:i:s", strtotime($league_start) - 1);

            if ($req_start >= $req_end || $req_start >= $league_start || $req_start >= $league_end) {
                $response = array(
                    'code'      => 404,
                    'status'    => 'failed',
                    'message'   => 'Invalid league duration setting.'
                );
                return response()->json($response, $response['code']);
            }
            if ($league_start >= $league_end) {
                $response = array(
                    'code'      => 404,
                    'status'    => 'failed',
                    'message'   => 'Invalid league duration setting.'
                );
                return response()->json($response, $response['code']);
            }

            $eventLeague = EventLeague::find($id);

            $dataUp = [
                'eventName' => $event_name,
                'reqStart' => $req_start,
                'reqEnd' => $req_end,
                'startDate' => $league_start,
                'endDate' => $league_end,
                'reqCoin' => $req_gold,
                'playCoin' => $req_play_coin,
            ];

            if (($eventLeague->update($dataUp))) {

                $eventLeague = EventLeague::find($id);

                $response = array(
                    'code'      => 200,
                    'status'    => 'success',
                    'data'      => $eventLeague,
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
