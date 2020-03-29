<?php

namespace App\Http\Controllers;

use App\Diary;
use App\Http\Requests\DiaryPost;
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
        return view('mypage.diary.index',[
            'diaries' => $diaries,
        ]);
    }
    public function create()
    {
        return view('mypage.diary.create');
    }


    /**
     * ファイルアップロード処理
     */
    public function upload(DiaryPost $request)
    {
        if ($request->file('file')->isValid([])) {
            $filename = $request->file->store('public/image');

            $diary = new Diary;
            $diary->title = $request->title;
            $diary->date = $request->date;
            $diary->content =$request->content;
            $diary->filename = basename($filename);
            $diary->save();
            return redirect('mypage/diary')->with('success', '保存しました。');
        } else {
            return redirect()
                ->back()
                ->withInput()
                ->withErrors(['file' => '画像がアップロードされていないか不正なデータです。']);
        }
    }
}
