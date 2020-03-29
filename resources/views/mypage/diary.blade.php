{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', '開発日記')

@section('content_header')
@stop

@section('content')
    {!! Form::open(['url' => '/mypage/diary/upload', 'method' => 'post', 'files' => true]) !!}

    {{--成功時のメッセージ--}}
    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    {{-- エラーメッセージ --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="form-group">

        @foreach($diaries as $diary)
            <div>
                <img src="{{ asset('storage/image/' . $diary->filename) }}" alt="diary" />
                <p>{{ $diary->content }}</p>
            </div>
        @endforeach
        {!! Form::label('file', '画像アップロード', ['class' => 'control-label']) !!}
        {!! Form::file('file') !!}
        {!! Form::label('coontent', 'メッセージ:') !!}
        {!! Form::text('content', null, ['class' => 'form-control']) !!}
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
