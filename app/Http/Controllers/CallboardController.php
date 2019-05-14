<?php

namespace App\Http\Controllers;

use App\Http\Requests\CallboardRequest;
use Grpc\Call;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Service\UserService;
use App\Models\Callboard;

class CallboardController extends Controller
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
    	return view('callboard.list');
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

    public function createArticle(CallboardRequest $request){
        return view('callboard.create');
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
                    'actionButton' => "<a href=\"/article/" . $v -> id  . "\">查看</a>"
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


}
