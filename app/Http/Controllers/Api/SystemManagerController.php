<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\System;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
// use Image;
// use Intervention\Image\Facades\Image;
use Intervention\Image\ImageManagerStatic as Image;

class SystemManagerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $sys = System::gets();
        return response()->json(['status' => 200, 'success' => 'Ok', 'res' => array('data' => $sys)]);
        
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
        // dd(asset('storage/public/images/logo/VHE2tl91JA1658819556.jpg'));
        try{
            
            DB::beginTransaction();
            foreach ($request->except(array('_token', '_method')) as $key => $value) {
                if($key == 'maintain_content')
                    continue;
                $value = addslashes($value);
                DB::update("update systems set conf_val = '$value' WHERE conf_field = '$key'");
            
            }
            // if ($request->hasFile('maintain_content')) {
            //     $filename = Str::random(10) . '' . time() . '.' . $request->file('maintain_content')->getClientOriginalExtension();
            //     Storage::disk('local')->put('public/images/logo/' . $filename, file_get_contents($request->file('maintain_content')));
            //     // DB::update("update systems set conf_val = 'storage/public/images/logo/$filename' WHERE conf_field = 'maintain_content'");
            //     $filename = asset("storage/public/images/logo/$filename");
            //     DB::update("update systems set conf_val = '$filename' WHERE conf_field = 'maintain_content'");
            //     //$app->screenshots =  json_encode([$request->file('uploadimage')->storeAs('public/images',$filename)]);
            // }

            if ($request->hasFile('maintain_content')) {
                $image = $request->file('maintain_content');
                $filename  = time() . '.' . $image->getClientOriginalExtension();
                $path = public_path('storage/public/images/logo/' . $filename);
                Image::make($image->getRealPath())->resize(200, 200)->save($path);
                $filename = asset("storage/public/images/logo/$filename");
                DB::update("update systems set conf_val = '$filename' WHERE conf_field = 'maintain_content'");
            }

            if ($request->hasFile('apk')) {
                $apk = $request->file('apk');
                $apkfilename  = time() . '.' . $apk->getClientOriginalExtension();
                $path = public_path('storage/public/apk/' . $apkfilename);

                $request->file->move(public_path('file'), $apkfilename);

                $apkfilename = public_path('file').$apkfilename;

                DB::update("update systems set conf_val = '$apkfilename' WHERE conf_field = 'apk'");
            }

            DB::commit();
        }catch(\Exception $e){
            DB::rollback();
            return response()->json(['status' => 400, 'error' => $e->getMessage()]);
        }
        
        return response()->json(['status' => 200, 'success' => 'Thành công']);
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
