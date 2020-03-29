<?php

namespace App\Http\Controllers;

use App\Diary;
use Illuminate\Http\Request;

class DiaryController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $diaries = Diary::all();
        return view('mypage.diary',[
            'diaries' => $diaries,
        ]);
    }


    /**
     * ファイルアップロード処理
     */
    public function upload(Request $request)
    {
        $this->validate($request, [
            'file' => [
                // 必須
                'required',
                // アップロードされたファイルであること
                'file',
                // 画像ファイルであること
                'image',
                // MIMEタイプを指定
                'mimes:jpeg,png',
                // 最小縦横120px 最大縦横400px
                'dimensions:min_width=120,min_height=120,max_width=400,max_height=400',
            ]
        ]);

        if ($request->file('file')->isValid([])) {
            $filename = $request->file->store('public/image');

            $diary = new Diary;
            $diary->content =$request->content;
            $diary->filename = basename($filename);
            $diary->save();

            return redirect('/diary')->with('success', '保存しました。');
        } else {
            return redirect()
                ->back()
                ->withInput()
                ->withErrors(['file' => '画像がアップロードされていないか不正なデータです。']);
        }
    }
}
