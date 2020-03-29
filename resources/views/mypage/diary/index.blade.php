{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', '開発日記')

@section('content_header')
@stop

@section('content')
    {{--成功時のメッセージ--}}
    <a href="{{ route('diary.create') }}">投稿</a>
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
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm3">
                        <h3>{{ $diary->date }}</h3>
                    </div>
                </div>
                <p class="border-left border-primary" style="padding:10px;">{!! nl2br($diary->content) !!}</p>
                <img class="img-fluid border border-primary" src="{{ asset('storage/image/' . $diary->filename) }}" alt="diary" />
            </div>
        </div>
    @endforeach
@stop
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
@stop
