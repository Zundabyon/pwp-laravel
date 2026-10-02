<?php

namespace App\Http\Controllers\Tweet;

use App\Http\Controllers\Controller;
use App\Models\Tweet;
use Illuminate\Http\Request;
use Illuminate\View\Factory;

class IndexController extends Controller
{
// invokeはPHPのマジックメソッド。一つのコントローラークラスに一つのメソッドしか登録できないという制約を生み出す。
    public function __invoke(Request $request)
    {
        $tweets = Tweet::all();
        dd($tweets);
// 第一引数は 'tweet.index'はresouces/viewsディレクトリ配下のファイル名を指定 ドットで区切ることでデイレクトリと対応してbladeファイルが適用される
// 第二引数は テンプレートで利用するデータを配列で渡すことができる　この例では name変数にlaravelと言う
        return view('tweet.index')->with('tweets', $tweets);
// テンプレートへの変数の渡し方も次のようなのがある　return view('tweet.index')->with('name','laravel');
    }
}
