{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Q3')

@section('content_header')
@stop

@section('content')
    <div>
        <b><p>最終問題</p></b>
        <p>こいつは誰でしょう</p>
    </div>
    <img src="{{ asset('/img/tokupon.jpg') }}" alt="アイコン">
    <div>
        <form id="mega" method="POST" action="/mypage/information/upload"　onsubmit="return false;">
            @csrf
            <input type="text" name="ans" id="ans">
            <input type="button" style="display:none;">
        </form>
        <button id="test">送信</button>
        <div id="message"></div>
    </div>
@stop

@section('css')
@stop

@section('js')
    <script>
        document.getElementById("mega").onkeypress = (e) => {
            // form1に入力されたキーを取得
            const key = e.keyCode || e.charCode || 0;
            // 13はEnterキーのキーコード
            if (key == 13) {
                // アクションを行わない
                e.preventDefault();
            }
        }

        var timer = 0;
        $('#test').click(function(){
            var val = $('#ans').val();
            console.log(val);
            timer += 1;
            if(val == "とくぽん"){
                $('form').submit();
            }else{
                $('#message').html(timer+"杯")
            }
        });
    </script>
@stop
