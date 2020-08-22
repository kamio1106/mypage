{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', '開発日記')

@section('content_header')
@stop

@section('content')

    <div>
        左上がスタート、右下がゴール<br>
        サイズ変えると表示も変わるよ<br><br>
    </div>
    <div style="margin-bottom:10px;">
        迷路のサイズ：
        <input id="mazeSize" type="text" value="20" style="width:30px;">
        <button id="create">Create</button>
    </div>
    <div id="maze"></div>
    <br>
    <div style="font-size: 10px;" id="text-judge"></div>


{{--    --}}{{--成功時のメッセージ--}}
{{--    <a href="{{ route('diary.create') }}" class="btn btn-primary" style="margin-bottom:10px;">新規投稿</a>--}}
{{--    <p>※投稿には管理者パスが必要になります</p>--}}
{{--    @if (session('success'))--}}
{{--        <div class="alert alert-success">{{ session('success') }}</div>--}}
{{--    @endif--}}
{{--    --}}{{-- エラーメッセージ --}}
{{--    @if ($errors->any())--}}
{{--        <div class="alert alert-danger">--}}
{{--            <ul>--}}
{{--                @foreach ($errors->all() as $error)--}}
{{--                    <li>{{ $error }}</li>--}}
{{--                @endforeach--}}
{{--            </ul>--}}
{{--        </div>--}}
{{--    @endif--}}
{{--    @foreach($diaries as $diary)--}}
{{--        <div class="card" style="margin-bottom:50px;">--}}
{{--            <div class="card-body">--}}
{{--                <div class="row">--}}
{{--                    <div class="col-sm3">--}}
{{--                        <h5>{{ $diary->date }}</h5>--}}
{{--                    </div>--}}
{{--                    <div class="offset-sm-8 col-sm-1">--}}
{{--                        <a href="{{ route('diary.edit', ['id' => $diary->id]) }}">編集</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <h3 style="border-left:solid; border-width:5px; border-color:blue; padding-left:10px;">{!! nl2br($diary->title) !!}</h3>--}}
{{--                <p>{!! nl2br($diary->content) !!}</p>--}}
{{--                @if($diary->filename2)--}}
{{--                    <div class="row">--}}
{{--                        <img class="col-sm-6 img-fluid border border-success" src="{{ asset('storage/image/' . $diary->filename) }}" alt="diary" />--}}
{{--                        <img class="col-sm-6 img-fluid border border-success" src="{{ asset('storage/image/' . $diary->filename2) }}" alt="diary" />--}}
{{--                    </div>--}}
{{--                @elseif($diary->filename)--}}
{{--                    <img class="img-fluid border border-success" src="{{ asset('storage/image/' . $diary->filename) }}" alt="diary" />--}}
{{--                @endif--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    @endforeach--}}
@stop
@section('css')
    <link rel="stylesheet" href="{{ asset('/css/add_style.css') }}">
@stop

@section('js')
    <script>
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

        function judge(size){
            if (size > 94){
                const diff = size - 89;
                target = "でけ"+"ぇ".repeat(diff / 5)
            }else if(size < 84){
                const diff = 89 - size;
                if(diff < 90){
                    target = "ちいせ" + "ぇ".repeat(diff / 5)
                }else{
                    target = "0以上が吉"
                }
            }else if(size == 89){
                target = "おつでぃ〜す"
            }else if(size <= 94 && size >= 84){
                target = "説ある"
            }else{
                target = "半角数字のみ許す"
            }
            $('#text-judge').html(target);
        }

        function create () {

            var size = parseInt(document.querySelector("#mazeSize").value);
            if (isNaN(size)) size = 20;
            if(size == 89) {
                $('#maze').html('<img src={{ asset('/img/qr.png') }} >');
                $('#text-judge').html("");
            }else if (size < 200) {
                // 迷路を描画する
                var maze = new Maze(size);
                maze.create({algorithm: Maze.ALGO.STICK});
                judge(size);
            }else{
                $('#maze').html("");
                $('#text-judge').html("200以上は許さん");
            }
        }

        create();
        document.querySelector("#create").addEventListener("click", create);
    </script>
@stop
