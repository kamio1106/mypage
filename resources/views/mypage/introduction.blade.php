{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')

    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <div class="profile-card">
                            <div class="profile-card__inner">
                                <div class="profile-thumb">
                                    <img src="dist/img/neko-160x160.jpg" alt="アイコン">
                                </div>
                                <div class="profile-content">
                                    <span class="profile-name">猫好きの大学院一年生です</span>
                                    <span class="profile-job">webエンジニアを目指して日々精進</span>
                                    <br>
                                    <br>
                                    <br>
                                    <span class="profile-text"><span>○</span>名前:大塚凜太郎(23)</span>
                                    <span class="profile-text"><span>○</span>趣味:ダーツ、ボウリング、漫画を読むこと</span>
                                    <span class="profile-text"><span>○</span>大学:東京大学修士1年、専攻は微生物の遺伝子研究(2019/10月より休学)</span>
                                    <br>
                                    <span class="profile-reason">将来はwebエンジニアとして活躍したいと考えています。</span>
                                    <span class="profile-reason">現在web系企業でインターンをしながらメキメキ上達中!!主にLaravelを使っています。</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <aside class="control-sidebar control-sidebar-dark">
        </aside>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
