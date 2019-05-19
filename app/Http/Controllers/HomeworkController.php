<?php

namespace App\Http\Controllers;

use App\homework;
use App\Http\Controllers\Controller;
use App\userinfo;
use Illuminate\Http\Request;
use App\Models\Callboard;
use App\Http\Requests\CallboardRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

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

        $u = homework::
        where('teachername', Auth::user()->username)
            ->orWhere('studentusername', Auth::user()->username);

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
        $user = Auth::user();
//        $data = \App\homework::where(function($q) use($user) {
//            return $q
//                ->where('teachername', $user->username)
//            ->orWhere('studentusername', $user->username);
//        })->get();
        $data = homework::all();
        $result = [];
        if ($data) {
            foreach ($data as $v) {
                $result[] = [
                    "teachername" => $v -> teachername,
                    'studentname' => $v -> studentname,
                    'homeworkname' => $v -> homeworkname ,
                    'file' => '<a href="homework/upload/'.$v -> id.'">提交</a>',
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
    public function create(){
        return view('homework.create');
    }

    public function createHomework(Request $request){
        homework::create([
            'homeworkname' => $request->input('homeworkname'),
            'teachername' => Auth::user()->username(),
            'studentname' => Auth::user()->name(),
        ])->save();
        return redirect('/homework');
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
