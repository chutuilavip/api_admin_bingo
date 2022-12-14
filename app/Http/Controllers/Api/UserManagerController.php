<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\AccountData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class UserManagerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        if (!empty($request->input('limit'))) {
            $limit = $request->input('limit');
        } else {
            $limit = 10;
        }
        
        $query = new AccountData();
        if(!empty($request->input('userid'))){
            $query = $query->where('UserID', trim($request->input('userid')));
        }
        if(!empty($request->input('usercode'))){
            $query = $query->where('UserCode', trim($request->input('usercode')));
        }
        if(!empty($request->input('nickname'))){
            $query = $query->where('NickName','LIKE','%'.trim($request->input('nickname').'%'));
        }
        $query = $query->select('*')->where(DB::raw('LEFT(`UserID`, 3)'), '<>', 'bot');

        $data = $query->paginate($limit);
        $total = $query->count();
        return response()->json(['status' => 200, 'success' => 'Ok', 'res' => array('total' => $total, 'data' => $data)]);
    }
    
    public function datapoint(Request $request)
    {
        // $request->start = "2022-09-19";
        // $request->end = "2022-09-20";
        // $request->time_start = "10:00";
        // $request->time_end = "09:59";

        $request->time_start = $request->time_start.":00";
        $request->time_end = $request->time_end.":59";
        
        if(empty($request->start) || empty($request->end)){
            $data = DB::select('SELECT sum(s.add_gold) as earnGoldToday,count(s.add_gold) as Turn,s.uID,s.UserID,s.NickName,s.accountExp,s.Gold, s.registerDate, s.lastAccessDate 
            from (	select l.uID,l.add_gold,l.logdate,d.UserID,d.NickName,d.accountExp,d.Gold,d.registerDate,d.lastAccessDate,d.pendingGold 
                    from accountdata as d 
                    INNER JOIN gold_log as l ON d.uID = l.uID 
                ) as s 
            group by s.uID 
            order by earnGoldToday desc');
        }else{
            
            $data = DB::select('SELECT sum(s.add_gold) as earnGoldToday,count(s.add_gold) as Turn,s.uID,s.UserID,s.NickName,s.accountExp,s.Gold, s.registerDate, s.lastAccessDate 
            from (	select l.uID,l.add_gold,l.logdate,d.UserID,d.NickName,d.accountExp,d.Gold,d.registerDate,d.lastAccessDate,d.pendingGold 
                    from accountdata as d 
                    INNER JOIN gold_log as l ON d.uID = l.uID 
                    where date(l.logdate) between TIMESTAMP(?, ?) and TIMESTAMP(?, ?)
                ) as s 
            group by s.uID 
            order by earnGoldToday desc', [$request->start, $request->time_start, $request->end, $request->time_end]);
        }
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
        $data = AccountData::select('*')->where('uID', $id)->first();

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
        $validator = Validator::make($request->all(), [
            'NickName' => 'required',
            'Avatar_index' => 'numeric',
            'Cash' => 'numeric',
            'Gold' => 'numeric',
        ], [
            'NickName.required' => 'Vui l??ng nh???p nick name',
        ]);

        if ($validator->fails()) {
            return response()->json(['status' => 400, 'errors' => $validator->errors()->all()]);
        }

        if (AccountData::where('uID', $id)->exists()) {
            $account = AccountData::find($id);
            if (!empty($request->Gold)) {
                $account->increment('Gold', $request->Gold);
            }
            if (!empty($request->Cash)) {
                $account->increment('Cash', $request->Cash);
            }
            $update = $account->modify($request->all());
            if (!empty($update)) {
                $account = AccountData::find($id);
                $response = array(
                    'code'      => 200,
                    'status'    => 'success',
                    'data'      => $account,
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
