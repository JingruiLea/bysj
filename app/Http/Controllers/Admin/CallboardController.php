<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Callboard;
use App\Http\Requests\CallboardRequest;
use App\Http\Controllers\Controller;

class CallboardController extends Controller
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
        return view('admin.callboard.list');
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
        $data = Callboard::all();
        $result = [];
        if ($data) {
            foreach ($data as $v) {
                $result[] = [
                    "id" => $v -> id,
                    'title' => $v -> title,
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
