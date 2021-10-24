@extends('admin.layouts.app')
@section('title', 'Список авто')

@section('content')

    <div class="row mb-2">
        <div class="col-md-8 m-auto text-left">
            <h1 class="display-5 mb-3">Список авто</h1>
        </div>
        <div class="col-md-4 m-auto text-right">
            <a href="{{ route('admin.rent.cars.add') }}" class="btn btn-success">Добавить авто</a>
        </div>
    </div>

@endsection