@extends('admin.layouts.app')
@section('title', 'Главная страница')

@section('content')
    <div class="page-header mb-4">
        <div class="media">
            <img alt="Image" src="{{ asset('assets/admin-panel/images/user.jpg') }}" class="avatar avatar-lg mt-1">
            <div class="media-body ml-3">
                <h1 class="mt-2">{{ auth()->user()->email }}</h1>
            </div>
        </div>
    </div>
@endsection