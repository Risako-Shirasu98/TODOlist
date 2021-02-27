<?php

namespace App\Http\Controllers;

use App\Folder;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index(int $id)
    {
        $folders = Folder::all();
        #Folder モデルの all クラスメソッドですべてのフォルダデータをデータベースから取得

        return view('tasks/index', [
            'folders' => $folders,
            'current_folder_id' => $id,
        ]);
        #上記を実行すると、テンプレートをレンダリングした結果の HTML がフレームワークによってブラウザにレスポンス
    }
}
