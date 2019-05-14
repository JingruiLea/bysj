<?php

namespace App\Http\Controllers\Admin;

use App\checkin;
use Illuminate\Http\Request;
use App\Models\Callboard;
use App\Http\Requests\CallboardRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

class CheckinlistController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * 控制台
     *  ***
     * @date   2016-10-29
     * @return [type]     [description]
     */
    public function index()
    {
        return view('admin.checkin.checkinlist');
    }
    /**
     * datatable国际化
     *  ***
     * @date   2016-10-29
     * @return [type]     [description]
     */
    public function dataTableI18n()
    {
        return response()->json(trans('pagination.i18n'));
    }

    public function getQrcode(){
        return '/admin/checkin/user?teachername='.Auth::user()->username.'&time='.time();
    }

    public function checkIn(){
        if(request()->checkintime - request() -> time > 5 * 60){
            echo "签到成功!";
            $c = checkin::create(request()->all());
            $c -> studentname = Auth::user()->username;
            $c -> save();
        }else{
            echo "签到失败";
        }
        //redirect('/admin/checkin');
    }

    public function ajaxIndex()
    {
        $data = checkin::all();
        $result = [];
        if ($data) {
            foreach ($data as $v) {
                $result[] = [
                    "id" => $v -> id,
                    'time' => $v -> created_at ,
                    'techername' => $v -> teachername,
                    'studentname' => $v ->studentname,
                ];
            }
        }
        $res = [
            'draw' => 1,
            'recordsTotal' => 5,
            'recordsFiltered' => 5,
            'data' => $result,
        ];
        return response()->json($res);
    }

    public function editArticle($id){
        $callboard = Callboard::find($id);
        return view('callboard.edit',[
            'callboard' => $callboard,
        ]);
    }
    public function createArticle(){
        return view('callboard.create');
    }

    public function store(CallboardRequest $request){
        $callboard = Callboard::create($request->all());
        $callboard->save();
        return redirect('/admin/callboard');
    }
    public function update(CallboardRequest $request, $id){
        $callboard = Callboard::find($id);
        $callboard->update($request->all());
        $callboard->save();
        return redirect('/admin/callboard');
    }

    public function destory(CallboardRequest $request, $id){
        $callboard = Callboard::find($id);
        $callboard->delete();
        return redirect('/admin/callboard');
    }
}
