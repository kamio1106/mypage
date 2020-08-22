{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', '情報発疹')

@section('content_header')
    <div>
        <b><p>最終問題</p></b>
        <p>こいつは誰でしょう</p>
    </div>
    <img src="{{ asset('/img/tokupon.jpg') }}" alt="アイコン">
    <div>
        {!! Form::open(['url' => '/mypage/information/upload', 'method' => 'post', 'files' => true]) !!}
            <div class="form-group">
                {!! Form::label('answer', '答え') !!}
                {!! Form::text('title', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::submit('送信', ['class' => 'btn btn-default']) !!}
            </div>
        {!! Form::close() !!}
    </div>
@stop

@section('content')
@stop

@section('css')
@stop

@section('js')
@stop
