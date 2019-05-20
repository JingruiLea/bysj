<?php

namespace App\Http\Controllers;

use App\classfee;
use App\homework;
use App\Http\Controllers\Controller;
use App\User;
use App\userinfo;
use Illuminate\Http\Request;
use App\Models\Callboard;
use App\Http\Requests\CallboardRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ClassfeeController extends Controller
{
    public function __construct()
    {
        $this->middleware('check.permission:system');
    }
    /**
     * 控制台
     *  ***
     * @date   2016-10-29
     * @return [type]     [description]
     */
    public function index()
    {

        $u = homework::
        where('teachername', Auth::user()->username)
            ->orWhere('studentusername', Auth::user()->username);

        return view('classfee.list',
            ['user'=>Auth::user(),
                'info'=>$u,
            ]);
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


    public function getArticle($id){
        $article = Callboard::where('id', $id)->first();
        if($article){
            $data = [
                'title' => $article -> title,
                'content' => $article -> content,
                'author' => $article -> author_name,
            ];
        }else{
            $data = [];
        }
        return view('callboard.article', $data);
    }

        public function birthday(){
            return view('birthday.list');
        }

    public function birthdayList(){
        $data = userinfo::all();
        $result = [];
        if ($data) {
            foreach ($data as $v) {
                $str = '2019'.substr($v -> birthday,4);
                $day = (strtotime($str) - time()) / (60 * 60 * 24);
                if($day < 0){
                    $str = '2020'.substr($v -> birthday,4);
                    $day = (strtotime($str) - time()) / (60 * 60 * 24);
                }
                $result[] = [
                    "lasttime" => (int)$day,
                    'birthday' => $v -> birthday,
                    'name' => $v -> name,
                    'username' => $v -> username,
                ];
            }
        }

        $res = [
            'draw' => 1,
            'recordsTotal' => count($result),
            'recordsFiltered' => count($result),
            'data' => $result,
        ];
        return response()->json($res);
    }

    public function ajaxIndex()
    {
        $user = Auth::user();
//        $data = \App\homework::where(function($q) use($user) {
//            return $q
//                ->where('teachername', $user->username)
//            ->orWhere('studentusername', $user->username);
//        })->get();
        $data = classfee::all();
        $result = [];
        if ($data) {
            foreach ($data as $v) {
                $result[] = [
                    "time" => $v -> created_at,
                    'record' => $v -> type.$v->amount.'元',
                    'note' => $v -> note ,
                    'last' => $v -> last,
                ];
            }
        }
        $res = [
            'draw' => 1,
            'recordsTotal' => count($result),
            'recordsFiltered' => count($result),
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
    public function create()
    {
        return view('classfee.create');
    }

    public function createRecord(Request $request){
        $l = classfee::all()->last();
        $amount = $request->input('amount');
        if($l){
            $l = $l->amount;
        }else{
            $l = 0;
        }
        if ($request->input('type') == '收入') {
            $last = $l + $amount;
        } else {
            $last = $l - $amount;
        }
        classfee::create([
            'type' => $request->input('type'),
            'amount' => $request->input('amount'),
            'note' => $request->input('note'),
            'last' => $last
        ])->save();
        return redirect('/classfee');
    }

    public function store(Request $request){
        $path = $request->file('photo')->store('photo');
        $u = userinfo::all()->where('username',$request->input('username'))->last();
        if($u!=null){
            $u->delete();
        }
        $callboard = userinfo::create($request->all());
        $callboard -> photo = $path;
        $callboard->save();
        return redirect('/callboard');
    }

    public function update(Request $request){
        $callboard = homework::find($request->input('id'));
        if(!$callboard){
            throw new \Exception('homework not found', 404);
        }
        $params = $request->all();
        $path = Storage::putFile('homework', $request->file('homework'));

        $callboard->update($params);
        $callboard->update(['file'=>$path]);
        $callboard->save();
        return redirect('/homework');
    }

    public function destory(Request $request, $id){
        $callboard = userinfo::find($id);
        $callboard->delete();
        return redirect('/callboard');
    }

    public function upload($id){
        $homework = homework::find($id);
        return view('homework.upload',['id'=>$id, 'homework'=>$homework]);
    }
}
