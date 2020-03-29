{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', '開発日記')

@section('content_header')
@stop

@section('content')
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
    @foreach($diaries as $diary)
        <div>
            <img src="{{ asset('storage/image/' . $diary->filename) }}" alt="diary" />
            <p>{{ $diary->content }}</p>
            <p>{{ $diary->updated_at }}</p>
        </div>
    @endforeach
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
@stop
