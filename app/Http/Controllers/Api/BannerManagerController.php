<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\ImageManagerStatic as Image;

class BannerManagerController extends Controller
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

        $data = Banner::select('*')->orderBy('id','desc')->paginate($limit);
        $total = Banner::select('*')->count();

        return response()->json(['status' => 200, 'success' => 'Ok', 'res' => array('total' => $total, 'data' => $data)]);
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
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'status' => 'required|integer|between:0,1',
        ]);
        
        if ($validator->fails()) {
            return response()->json(['status' => 400, 'errors' => $validator->errors()->all()]);
        }

        $data = [
            'title'   => $request->title,
            'status'  => $request->status,
        ];

        if ($request->hasFile('image')) {
            $file = $request->file('image');

            $name = time() . '_' . $file->getClientOriginalName();
            $path = public_path('storage/public/images/banner/' . $name);
            Image::make($file->getRealPath())->resize(973, 1180)->save($path);
            $rel_path = $file->storeAs("images/banner", $name);
            $data['image'] = '/storage/public/'.$rel_path;
        }
        
        $detail = Banner::create($data);

        $response = array(
            'code'      => 200,
            'status'    => 'success',
            'data'      => $detail,
            'message'   => __('message.success')
        );
        
        return response()->json($response, $response['code']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Banner::select('*')->where('id', $id)->first();
        return response()->json(['status' => 200, 'success' => 'Ok', 'res' => array('data' => $data)]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
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
            'title' => 'required',
            'status' => 'required',
        ]);
        
        if ($validator->fails()) {
            return response()->json(['status' => 400, 'errors' => $validator->errors()->all()]);
        }
        
        if (Banner::where('id', $id)->exists()) {
            $banner = Banner::find($id);

            $dataUp = [
                'title' => $request->title,
                'status' => $request->status
            ];
            
            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $name = time() . '_' . $file->getClientOriginalName();
                $path = public_path('storage/public/images/banner/' . $name);
                Image::make($file->getRealPath())->resize(973, 1180)->save($path);
                $rel_path = $file->storeAs("images/banner", $name);
                $dataUp['image'] = '/storage/public/'.$rel_path;
            }

            if (!empty($banner->update($dataUp))) {

                $banner = Banner::find($id);

                $response = array(
                    'code'      => 200,
                    'status'    => 'success',
                    'data'      => $banner,
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
    public function destroy(Request $request, $id)
    {
        //
        if (Banner::where('id', $id)->exists()) {
            $banner = Banner::find($id);

            $dataUp = [
                'status' => 0
            ];
            
            $banner->update($dataUp);
            if (!empty($banner->update($dataUp))) {

                $banner = Banner::find($id);

                $response = array(
                    'code'      => 200,
                    'status'    => 'success',
                    'data'      => $banner,
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
}
