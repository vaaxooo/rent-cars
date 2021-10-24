@extends('admin.layouts.app')
@section('title', 'Добавление новой категории')

@section('content')

    <h1 class="display-5 mb-3">Добавление новой категории</h1>

    <form action="{{ route('admin.categories.add') }}" method="POST">
        @csrf
        <div class="card">
            <div class="card-body">
                <div class="errors" id="errors"></div>
                <div class="form-group">
                    <label for="name">Название категории:</label>
                    <input type="text" class="form-control form-control-lg" id="name" name="name" placeholder="Название категории" />
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-dark">Добавить категорию</button>
                </div>
            </div>
        </div>
    </form>

@endsection