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


(function () {

    // ref: 迷路作り
    // http://www5d.biglobe.ne.jp/~stssk/maze/make.html

    // 配列をシャッフルする
    function shuffle (o) {
        for(var j, x, i = o.length; i; j = Math.floor(Math.random() * i), x = o[--i], o[i] = o[j], o[j] = x);
        return o;
    }

    /**
     迷路を表現するクラス
     */
    window.Maze = function (size) {
        // 壁と通路の関係上、サイズは奇数にしとく
        this.size = (size % 2 === 0 ? size + 1 : size);
        this.box = [];
        this.$maze = document.querySelector("#maze");
    };

    /**
     アルゴリズムタイプ
     */
    Maze.ALGO = {STICK: 1};

    var p = Maze.prototype;

    /**
     迷路を表示する
     */
    p.show = function () {
        var snipet = '';
        for (var i = 0; i < this.size; i++) {
            for (var j = 0; j < this.size; j++) {
                if (this.box[j][i] === 0) {
                    // 壁
                    snipet += '<div class="w"></div>';
                } else {
                    // 通路
                    snipet += '<div class="p"></div>';
                }
            }
        }
        this.$maze.innerHTML = snipet;
        this.$maze.style.height = (this.size * 10) + 'px';
        this.$maze.style.width  = (this.size * 10) + 'px';
    }

    /**
     迷路を作る
     */
    p.create = function (options) {
        options = options || {};
        if (options.algorithm === Maze.ALGO.STICK) {
            this._createByStick();
        }
        this.show();
    }

    /**
     迷路を作る（棒倒し）
     */
    p._createByStick = function () {

        // 初期化
        // まずは壁と通路を交互に作成する
        this.box = [];
        for (var i = 0; i < this.size; i++) {
            var row = [];
            this.box.push(row);
            for (var j = 0; j < this.size; j++) {
                // 最初の行と最後行は壁
                if (i === 0 || (i + 1) === this.size) {
                    row.push(0);
                    // 最初の列と最後の列も壁
                } else if (j === 0 || (j + 1) === this.size) {
                    row.push(0);
                    // 奇数行は全部通路
                } else if (i % 2 === 1) {
                    row.push(1);
                    // 偶数行は壁と通路を交互に配置
                } else {
                    // 壁と通路
                    row.push(j % 2);
                }
            }
        }

        // debug
        // return;

        // ここから壁倒しで迷路を作る
        for (var r = 0; r < this.box.length; r++) {
            // 最初と最後の行は対象外
            if (r === 0 || (r + 1) === this.box.length) {
                continue;
            }
            // 壁がある行のみを対象
            if (r % 2 === 1) {
                continue;
            }
            // 行を取り出す
            var row = this.box[r];

            // 最初の行のみ、上下左右倒してOK（重なるのはNG）
            var direction = ['top', 'bottom', 'left', 'right'];
            if (r >= 4) {
                // 最初以外は、上には倒しちゃだめー
                direction = direction.slice(1);
            }

            for (var i = 0; i < row.length; i++) {
                // 端っこは対象外
                if (i === 0 || (i + 1) === row.length) {
                    continue;
                }
                if (i % 2 === 0) {
                    direction = shuffle(direction);
                    for (var j = 0; j < direction.length; j++) {
                        if (direction[j] === "top") {
                            if (this.box[r-1][i] === 1) {
                                this.box[r-1][i] = 0;
                                break;
                            }
                        }
                        if (direction[j] === "left") {
                            if (this.box[r][i-1] === 1) {
                                this.box[r][i-1] = 0;
                                break;
                            }
                        }
                        if (direction[j] === "right") {
                            if (this.box[r][i+1] === 1) {
                                this.box[r][i+1] = 0;
                                break;
                            }
                        }
                        if (direction[j] === "bottom") {
                            if (this.box[r+1][i] === 1) {
                                this.box[r+1][i] = 0;
                                break;
                            }
                        }
                    }
                }
            }
        }
    }

})();
