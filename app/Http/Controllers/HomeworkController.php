<?php

namespace App\Http\Controllers;

use App\homework;
use App\Http\Controllers\Controller;
use App\userinfo;
use Illuminate\Http\Request;
use App\Models\Callboard;
use App\Http\Requests\CallboardRequest;
use Illuminate\Support\Facades\Auth;

class HomeworkController extends Controller
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
        $u = userinfo::all()->
        where('username', Auth::user()->username);
        if ($u==null){
            $u = 0;
        }else{
            $u = $u -> last();
        }
        return view('homework.list',
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

    public function ajaxIndex()
    {
        $data = homework::all()->where('teachername', Auth::user()->name)->orWhere('studentname', Auth::user()->name);
        $result = [];
        if ($data) {
            foreach ($data as $v) {
                $result[] = [
                    "teachername" => $v -> teachername,
                    'studentname' => $v -> studentname,
                    'time' => $v -> created_at ,
                    'author' => $v -> author_name,
                    'actionButton' => $v -> getActionButtonAttribute(),
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

    public function update(Request $request, $id){
        $callboard = userinfo::find($id);
        $callboard->update($request->all());
        $callboard->save();
        return redirect('/callboard');
    }

    public function destory(Request $request, $id){
        $callboard = userinfo::find($id);
        $callboard->delete();
        return redirect('/callboard');
    }
}
