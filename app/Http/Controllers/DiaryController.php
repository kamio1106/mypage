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
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $diaries = Diary::orderBy('date','desc')->get();
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
        $diary = new Diary;
        $diary->title = $request->title;
        $diary->date = $request->date;
        $diary->content =$request->content;
        if ($request->file('file')->isValid([])) {
            $filename = $request->file('file')->store('public/image');

            $diary->filename = basename($filename);
            if($request->file('file2') !== null){
                if ($request->file('file2')->isValid([])) {
                    $filename2 = $request->file('file2')->store('public/image');
                    $diary->filename2 = basename($filename2);
                }
            }
        }
        $diary->save();
        return redirect('mypage/diary')->with('success', '保存しました。');
    }
    public function edit($id)
    {
        $diary = Diary::find($id);
        return view('mypage.diary.edit',[
            'diary' => $diary,
        ]);
    }
    public function updata(Request $request, $id)
    {
        if ($request->file('file')->isValid([])) {
            $filename = $request->file('file')->store('public/image');

            $diary = Diary::find($id);
            $diary->title = $request->title;
            $diary->date = $request->date;
            $diary->content =$request->content;
            $diary->filename = basename($filename);
            if($request->file('file2') !== null){
                if ($request->file('file2')->isValid([])) {
                    $filename2 = $request->file('file2')->store('public/image');
                    $diary->filename2 = basename($filename2);
                }
            }
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
