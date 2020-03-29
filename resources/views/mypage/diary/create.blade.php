{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', '開発日記-投稿')

@section('content_header')
@stop

@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            @if ($errors)
                <p>入力に誤りがあります</p>
            @endif
        </div>
    @endif
    {!! Form::open(['url' => '/mypage/diary/upload', 'method' => 'post', 'files' => true]) !!}
        <div class="row">
            <div class="form-group col-sm-3">
                <div class="form-group">
                    {!! Form::label('file', '画像1(*必須)', ['class' => 'control-label']) !!}<br>
                    {!! Form::file('file') !!}
                </div>
                <div class="form-group">
                    {!! Form::label('file2', '画像2(*任意)', ['class' => 'control-label']) !!}<br>
                    {!! Form::file('file2') !!}
                </div>
            </div>
            <div class="form-group col-sm-3">
                {!! Form::label('date', '日付') !!}
                {!! Form::text('date', null, ['class' => 'form-control','placeholder' => 'YYYY-MM-DD']) !!}
            </div>
            <div class="form-group col-sm-4">
                {!! Form::label('password', 'パスワード') !!}
                {!! Form::text('password', null, ['class' => 'form-control','placeholder' => '※管理人パスワードが必要です']) !!}
            </div>
        </div>
        <div class="form-group">
            {!! Form::label('title', 'タイトル') !!}
            {!! Form::text('title', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('content', '日記') !!}
            {!! Form::textarea('content', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('アップロード', ['class' => 'btn btn-default']) !!}
        </div>
    {!! Form::close() !!}
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
@stop
