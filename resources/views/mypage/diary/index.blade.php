{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', '開発日記')

@section('content_header')
@stop

@section('content')
    {{--成功時のメッセージ--}}
    <a href="{{ route('diary.create') }}" class="btn btn-primary" style="margin-bottom:10px;">新規投稿</a>
    <p>※投稿には管理者パスが必要になります</p>
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
    @foreach($diaries as $diary)
        <div class="card" style="margin-bottom:50px;">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm3">
                        <h3>{{ $diary->date }}</h3>
                    </div>
                    <div class="offset-sm-8 col-sm-1">
                        <a href="{{ route('diary.edit', ['id' => $diary->id]) }}">編集</a>
                    </div>
                </div>
                <p class="border-left border-primary" style="padding:10px;">{!! nl2br($diary->title) !!}</p>
                <p>{!! nl2br($diary->content) !!}</p>
                @if($diary->filename2)
                    <div class="row">
                        <img class="col-sm-6 img-fluid border border-success" src="{{ asset('storage/image/' . $diary->filename) }}" alt="diary" />
                        <img class="col-sm-6 img-fluid border border-success" src="{{ asset('storage/image/' . $diary->filename2) }}" alt="diary" />
                    </div>
                @else
                    <img class="img-fluid border border-success" src="{{ asset('storage/image/' . $diary->filename) }}" alt="diary" />
                @endif
            </div>
        </div>
    @endforeach
@stop
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
@stop
