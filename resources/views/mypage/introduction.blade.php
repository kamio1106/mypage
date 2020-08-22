{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'こんにちは')

@section('content_header')
@stop

@section('content')
    <div class="profile-card">
{{--        <div class="profile-card__inner">--}}
{{--            <div class="profile-thumb">--}}
{{--                <img src="{{ asset('/vendor/adminlte/dist/img/neko-160x160.jpg') }}" alt="アイコン">--}}
{{--            </div>--}}
{{--            <div class="profile-content">--}}
{{--                <span class="profile-name">猫好きの大学院一年生です</span>--}}
{{--                <span class="profile-job">webエンジニアを目指して日々精進</span>--}}
{{--                <br>--}}
{{--                <br>--}}
{{--                <br>--}}
{{--                <span class="profile-text"><span>○</span>名前:大塚凜太郎(23)</span>--}}
{{--                <span class="profile-text"><span>○</span>趣味:ダーツ、ボウリング、漫画を読むこと</span>--}}
{{--                <span class="profile-text"><span>○</span>大学:東京大学修士1年、専攻は微生物の遺伝子研究(2019/10月より休学)</span>--}}
{{--                <br>e--}}
{{--                <span class="profile-reason">将来はwebエンジニアとして活躍したいと考えています。</span>--}}
{{--                <span class="profile-reason">現在web系企業でインターンをしながらメキメキ上達中!!主にLaravelを使っています。</span>--}}
{{--            </div>--}}
{{--        </div>--}}
        <div class="profile-card__inner">
            <div class="profile-content" style="line-height:10000%; font-size:15px;">
                <span class="profile-name" >
                    <p class="inview_re fadeIn">私は酒柱</p>
                    <p class="inview_re fadeIn">おしりした・ゼウス・かみお</p>
                    <p class="inview_re fadeIn">まい、24歳のお誕生日おめでとう</p>
                    <p class="inview_re fadeIn">と、言いたいところだが</p>
                    <p class="inview_re fadeIn">そう簡単に次の日を迎えられると</p>
                    <p class="inview_re fadeIn">思わない方がいい</p>
                    <p class="inview_re fadeIn">酒柱の私が君に試練を与える</p>
                    <p class="inview_re fadeIn">この試練を乗り越えられなければ</p>
                    <p class="inview_re fadeIn">莫大な量の酒が君を襲うだろう</p>
                    <p class="inview_re fadeIn">では、検討を祈る</p>
                </span>
            </div>
        </div>
    </div>
    <aside class="control-sidebar control-sidebar-dark">
    </aside>
@stop

@section('css')
    <link rel="stylesheet" href="{{ asset('/css/add_style.css') }}">
@stop

@section('js')
    <script type="text/javascript" src="{{ asset('/js/jquery.inview.min.js') }}"></script>
    <script>
        $(function(){
            $(".inview_re").on("inview", function (event, isInView) {
                if (isInView) {
                    $(this).stop().addClass("is-show");
                } else {
                    $(this).stop().removeClass("is-show");
                }
            });
        });
    </script>
@stop
