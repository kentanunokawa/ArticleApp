<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;

class MenuController extends Controller
{
    /*
    *一覧表示
    */
    public function index(){
        // $menuTableData = new Menu();
        // indexはEroquentの書き方を採用(viewでformat()をつかいたいため)

        // menuデータの取得かつpagenateの表示数を定義
        $menus = Menu::paginate(20);
        // 現在のページ数を取得
        $currentPage = $menus->currentPage();

        // 検索機能作成のために下記の出力から参照する
        // echo '<pre>';
        // var_dump($menus);
        // echo '</pre>';
        // exit;

        return view('top',['menus'=>$menus]);
    }
    

    /*
    *新規追加画面表示
    */
    public function create(){
        $genre1 = ['和食','洋食','中華料理','韓国料理','その他'];
        $genre2 = ['主食','主菜','副菜','汁物','お菓子'];

        return view('addMenu',['genre1'=>$genre1,'genre2'=>$genre2]);
    }


    /*
    *新規追加登録処理
    */
    public function store(Request $request){
        // インスタンスから作成する記載方法
        // $addMenu = new Menu();
        // $addMenu->genre1 = $request->genre1;
        // $addMenu->genre2 = $request->genre2;
        // $addMenu->menu = $request->menu;
        // $addMenu->recipe = $request->recipe;
        // $addMenu->save();
        // return redirect()->route('addComplete');


        // 組み込みメソッドを使用した簡単な記載方法(try-catchは必須)
        try {
            Menu::create($request->all());
            return redirect()->route('addComplete');

        } catch (\Throwable $th) {
            $error = 'どれか入力してないよ！';
            echo $error;
        }

    }


    /*
    *詳細表示
    */
    public function show($id){
        $menu = Menu::find($id);
        return view('show',['menu'=>$menu]);
    }


    /*
    *編集画面表示
    */
    public function edit($id){
        $genre1 = ['和食','洋食','中華料理','韓国料理','その他'];
        $genre2 = ['主食','主菜','副菜','汁物','お菓子'];
        $menu = Menu::find($id);
        return view('edit',['id'=>$id,'menu'=>$menu , 'genre1'=>$genre1,'genre2'=>$genre2]);
    }


    /*
    *編集内容の更新処理
    */
    public function update(Request $request , $id){
        $update = $request->all();
        Menu::find($id)->update($update);
        return redirect()->route('show',$id);
    }


    /*
    *削除
    */
    public function delete(Request $request , $id){
        Menu::where('id',$id)->delete();
        return view('deleteComplete');
    }


    /*
    *検索機能
    */
    public function search(Request $request){
        $searchData = $request->all();
        Menu::where('genre1',"$searchData",);
        // return view('top');
        // $searchMenu =  Menu::where('genre1','like',"")

    }
}
