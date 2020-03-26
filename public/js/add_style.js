var flg = "close";
$(function(){
    $("#jQueryBox").css("display", "none");
    $("#jQueryPush1").click(function(){
        if(flg == "close"){
            $("#jQueryBox").toggle();
            $("#card-title").html("投稿、削除、編集が行える簡易掲示板です。</br>"+"研究の隙間時間で制作しました。</br>"+"プログラミング未経験だった自分がphpのみを使い、初めて制作したものです。</br>");
            $("#card-time").html("○制作期間:20日");
            $("#card-language").html("○使用言語:PHP");
            $("#card-url").html("<a href='./board.php' target=\"_blank\" rel=\"noopener noreferrer\">サイトはこちら</a>");
            flg = "open-1";
        }else if(flg=="open-1"){
            $("#jQueryBox").toggle();
            flg = "close"
        }else{
            $("#card-title").html("投稿、削除、編集が行える簡易掲示板です。</br>"+"研究の隙間時間で制作しました。</br>"+"プログラミング未経験だった自分がphpのみを使い、初めて制作したものです。</br>");
            $("#card-time").html("○制作期間:20日");
            $("#card-language").html("○使用言語:PHP");
            $("#card-url").html("<a href='./board.php' target=\"_blank\" rel=\"noopener noreferrer\">サイトはこちら</a>");
            flg = "open-1"
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


    });$("#jQueryPush3").click(function(){
        if(flg == "close"){
            $("#jQueryBox").toggle();
            $("#card-title").html("グルナビAPIを使ったLINEbotです。</br>"+"可愛い猫ちゃんのアイコンが特徴です。</br>"+"</br>");
            $("#card-time").html("○制作期間:1週間");
            $("#card-language").html("○使用言語:PHP(laravle) x グルナビAPI");
            $("#card-url").html("<a href=\"https://lin.ee/57pUcts\" target=\"_blank\" rel=\"noopener noreferrer\"><img src=\"https://scdn.line-apps.com/n/line_add_friends/btn/ja.png\" alt=\"友だち追加\" height=\"36\" border=\"0\"></a>");
            flg = "open-3";
        }else if(flg=="open-3"){
            $("#jQueryBox").toggle();
            flg = "close"
        }else{
            $("#card-title").html("グルナビAPIを使ったLINEbotです。</br>"+"可愛い猫ちゃんのアイコンが特徴です。</br>"+"</br>");
            $("#card-time").html("○制作期間:1週間");
            $("#card-language").html("○使用言語:PHP(laravle) x グルナビAPI");
            $("#card-url").html("<a href=\"https://lin.ee/57pUcts\" target=\"_blank\" rel=\"noopener noreferrer\"><img src=\"https://scdn.line-apps.com/n/line_add_friends/btn/ja.png\" alt=\"友だち追加\" height=\"36\" border=\"0\"></a>");
            flg = "open-3"
        }
    });


    $("#jQueryPush4").click(function(){
        if(flg == "close"){
            $("#card-title").html("現在インターン先で数人の友達と開発しているタスク管理サイトです。インターン先の職場内で使用してもえることを目標に共同開発しています。</br>"+"</br>");
            $("#card-time").html("○制作期間:2週間~");
            $("#card-language").html("○使用言語:PHP(laravle)");
            $("#card-url").html("");
            flg = "open-4";
        }else if(flg=="open-4"){
            $("#jQueryBox").toggle();
            flg = "close"
        }else{
            $("#card-title").html("現在インターン先で数人の友達と開発しているタスク管理サイトです。インターン先の職場内で使用してもえることを目標に共同開発しています。</br>"+"</br>");
            $("#card-time").html("○制作期間:2週間~");
            $("#card-language").html("○使用言語:PHP(laravle)");
            $("#card-url").html("");
            flg = "open-4"
        }
    });
});
