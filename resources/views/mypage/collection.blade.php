{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', '制作物')

@section('content_header')
@stop

@section('content')
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="small-box bg-success">
                            <div class="inner" style="padding:40px 0px;">
                                <h3><i class="poo-left fas fa-poo" style="margin-right:30px; color:red;"></i>Q1<i class="poo-right fas fa-poo" id="jQueryPush2" style="margin-left:30px; color:blue;"></i></h3>
                            </div>
                            <a href="#" class="small-box-footer" id="jQueryPush1">Open<i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                </div>
{{--                <div class="row">--}}
{{--                    <div class="col-lg-3 col-6">--}}
{{--                        <div class="small-box bg-success">--}}
{{--                            <div class="inner">--}}
{{--                                <h3>掲示板</h3>--}}
{{--                                <p><i class="fas fa-pen-alt"></i> PHP only</p>--}}
{{--                            </div>--}}
{{--                            <div class="icon">--}}
{{--                                <i class="far fa-clipboard"></i>--}}
{{--                            </div>--}}
{{--                            <a href="#" class="small-box-footer" id="jQueryPush1">More info <i class="fas fa-arrow-circle-right"></i></a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-3 col-6">--}}
{{--                        <div class="small-box bg-info">--}}
{{--                            <div class="inner">--}}
{{--                                <h3>Microposts</h3>--}}
{{--                                <p><i class="fas fa-pen-alt"></i> Laravel</p>--}}
{{--                            </div>--}}
{{--                            <div class="icon">--}}
{{--                                <i class="fab fa-twitter"></i>--}}
{{--                            </div>--}}
{{--                            <a href="#" class="small-box-footer" id="jQueryPush2">More info <i class="fas fa-arrow-circle-right"></i></a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-3 col-6">--}}
{{--                        <div class="small-box bg-warning">--}}
{{--                            <div class="inner">--}}
{{--                                <h3>飲食店linebot</h3>--}}
{{--                                <p><i class="fas fa-pen-alt"></i> Laravel×グルナビAPI</p>--}}
{{--                            </div>--}}
{{--                            <div class="icon">--}}
{{--                                <i class="fas fa-paw"></i>--}}
{{--                            </div>--}}
{{--                            <a href="#" class="small-box-footer" id="jQueryPush3">More info <i class="fas fa-arrow-circle-right"></i></a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-3 col-6">--}}
{{--                        <div class="small-box bg-danger">--}}
{{--                            <div class="inner">--}}
{{--                                <h3><br></h3>--}}
{{--                                <p><i class="fas fa-pen-alt"></i> プロジェクト管理アプリ</p>--}}
{{--                            </div>--}}
{{--                            <div class="icon">--}}
{{--                                <i class="ion ion-pie-graph"></i>--}}
{{--                            </div>--}}
{{--                            <p class="small-box-footer" id="jQueryPush4">Now in progress</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </div>
            </div>
        </section>
        <div class="card mx-auto" id="jQueryBox" style="width:80%; margin:50px;">
            <div class="card-body" id="card-body">
                <h4 class="card-comment" id="card-title" style="padding:5px 5px; text-align:center; color:blue;"></h4>
            </div>
        </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        var flg = "close";
        $(function(){
            $("#jQueryBox").css("display", "none");
            $("#jQueryPush1").click(function(){
                if(flg == "close"){
                    $("#jQueryBox").toggle();
                    $("#card-title").html("うんこ");
                    flg = "open-1";
                }else if(flg=="open-1"){
                    $("#jQueryBox").toggle();
                    flg = "close"
                }else{
                    $("#jQueryBox").toggle();
                    $("#card-title").html("うんこ");
                    flg = "open-1";
                }
            });


            $("#jQueryPush2").click(function(){
                if(flg == "close"){
                    $("#jQueryBox").toggle();
                    $("#card-title").html("Laravelを使って作成した擬似ツイッターサイトです。</br>"+"Techacademyのコースを受講しながら作成したものです。</br>"+"</br>");
                    $("#card-time").html("○制作期間:2週間");
                    $("#card-language").html("○使用言語:PHP(laravle)");
                    $("#card-url").html("<a href='http://microposts-laravel1106.herokuapp.com/' target=\"_blank\" rel=\"noopener noreferrer\">サイトはこちら</a>");
                    flg = "open-2";
                }else if(flg=="open-2"){
                    $("#jQueryBox").toggle();
                    flg = "close"
                }else{
                    $("#card-title").html("Laravelを使って作成した擬似ツイッターサイトです。</br>"+"Techacademyのコースを受講しながら作成したものです。</br>"+"</br>");
                    $("#card-time").html("○制作期間:2週間");
                    $("#card-language").html("○使用言語:PHP(laravle)");
                    $("#card-url").html("<a href='http://microposts-laravel1106.herokuapp.com/' target=\"_blank\" rel=\"noopener noreferrer\">サイトはこちら</a>");
                    flg = "open-2"
                }


            })
        });
// var flg = "close";
//         $(function(){
//             $("#jQueryBox").css("display", "none");
//             $("#jQueryPush1").click(function(){
//                 if(flg == "close"){
//                     $("#jQueryBox").toggle();
//                     $("#card-title").html("投稿、削除、編集が行える簡易掲示板です。</br>"+"研究の隙間時間で制作しました。</br>"+"プログラミング未経験だった自分がphpのみを使い、初めて制作したものです。</br>");
//                     $("#card-time").html("○制作期間:20日");
//                     $("#card-language").html("○使用言語:PHP");
//                     $("#card-url").html("<a href='collection/board' target=\"_blank\" rel=\"noopener noreferrer\">サイトはこちら</a>");
//                     flg = "open-1";
//                 }else if(flg=="open-1"){
//                     $("#jQueryBox").toggle();
//                     flg = "close"
//                 }else{
//                     $("#card-title").html("投稿、削除、編集が行える簡易掲示板です。</br>"+"研究の隙間時間で制作しました。</br>"+"プログラミング未経験だった自分がphpのみを使い、初めて制作したものです。</br>");
//                     $("#card-time").html("○制作期間:20日");
//                     $("#card-language").html("○使用言語:PHP");
//                     $("#card-url").html("<a href='collection/board' target=\"_blank\" rel=\"noopener noreferrer\">サイトはこちら</a>");
//                     flg = "open-1"
//                 }
//             });
//
//
//             $("#jQueryPush2").click(function(){
//                 if(flg == "close"){
//                     $("#jQueryBox").toggle();
//                     $("#card-title").html("Laravelを使って作成した擬似ツイッターサイトです。</br>"+"Techacademyのコースを受講しながら作成したものです。</br>"+"</br>");
//                     $("#card-time").html("○制作期間:2週間");
//                     $("#card-language").html("○使用言語:PHP(laravle)");
//                     $("#card-url").html("<a href='http://microposts-laravel1106.herokuapp.com/' target=\"_blank\" rel=\"noopener noreferrer\">サイトはこちら</a>");
//                     flg = "open-2";
//                 }else if(flg=="open-2"){
//                     $("#jQueryBox").toggle();
//                     flg = "close"
//                 }else{
//                     $("#card-title").html("Laravelを使って作成した擬似ツイッターサイトです。</br>"+"Techacademyのコースを受講しながら作成したものです。</br>"+"</br>");
//                     $("#card-time").html("○制作期間:2週間");
//                     $("#card-language").html("○使用言語:PHP(laravle)");
//                     $("#card-url").html("<a href='http://microposts-laravel1106.herokuapp.com/' target=\"_blank\" rel=\"noopener noreferrer\">サイトはこちら</a>");
//                     flg = "open-2"
//                 }
//
//
//             });$("#jQueryPush3").click(function(){
//                 if(flg == "close"){
//                     $("#jQueryBox").toggle();
//                     $("#card-title").html("グルナビAPIを使ったLINEbotです。</br>"+"可愛い猫ちゃんのアイコンが特徴です。</br>"+"</br>");
//                     $("#card-time").html("○制作期間:1週間");
//                     $("#card-language").html("○使用言語:PHP(laravle) x グルナビAPI");
//                     $("#card-url").html("<a href=\"https://lin.ee/57pUcts\" target=\"_blank\" rel=\"noopener noreferrer\"><img src=\"https://scdn.line-apps.com/n/line_add_friends/btn/ja.png\" alt=\"友だち追加\" height=\"36\" border=\"0\"></a>");
//                     flg = "open-3";
//                 }else if(flg=="open-3"){
//                     $("#jQueryBox").toggle();
//                     flg = "close"
//                 }else{
//                     $("#card-title").html("グルナビAPIを使ったLINEbotです。</br>"+"可愛い猫ちゃんのアイコンが特徴です。</br>"+"</br>");
//                     $("#card-time").html("○制作期間:1週間");
//                     $("#card-language").html("○使用言語:PHP(laravle) x グルナビAPI");
//                     $("#card-url").html("<a href=\"https://lin.ee/57pUcts\" target=\"_blank\" rel=\"noopener noreferrer\"><img src=\"https://scdn.line-apps.com/n/line_add_friends/btn/ja.png\" alt=\"友だち追加\" height=\"36\" border=\"0\"></a>");
//                     flg = "open-3"
//                 }
//             });
//
//
//             $("#jQueryPush4").click(function(){
//                 if(flg == "close"){
//                     $("#card-title").html("現在インターン先で数人の友達と開発しているタスク管理サイトです。インターン先の職場内で使用してもえることを目標に共同開発しています。</br>"+"</br>");
//                     $("#card-time").html("○制作期間:2週間~");
//                     $("#card-language").html("○使用言語:PHP(laravle)");
//                     $("#card-url").html("");
//                     flg = "open-4";
//                 }else if(flg=="open-4"){
//                     $("#jQueryBox").toggle();
//                     flg = "close"
//                 }else{
//                     $("#card-title").html("現在インターン先で数人の友達と開発しているタスク管理サイトです。インターン先の職場内で使用してもえることを目標に共同開発しています。</br>"+"</br>");
//                     $("#card-time").html("○制作期間:2週間~");
//                     $("#card-language").html("○使用言語:PHP(laravle)");
//                     $("#card-url").html("");
//                     flg = "open-4"
//                 }
//             });
//         });

    </script>

@stop
