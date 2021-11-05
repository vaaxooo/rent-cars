@extends('admin.layouts.app')
@section('title', 'Редактирование категории')

@section('content')

    <h1 class="display-5 mb-3">Редактирование категории</h1>

    <form action="{{ route('admin.categories.edit', ['category' => $category->id]) }}" method="POST">
        @csrf
        <div class="card">
            <div class="card-body">
                <div class="errors" id="errors"></div>
                <div class="form-group">
                    <label for="name">Название категории:</label>
                    <input type="text" class="form-control form-control-lg" id="name" name="name" value="{{ $category->name }}" placeholder="Название категории" />
                </div>
                <div class="form-group">
                    <label for="position">Позиция категории:</label>
                    <input type="text" class="form-control form-control-lg" id="position" name="position" placeholder="Позиция категории" value="{{ $category->position }}"/>
                    <span class="text-muted text-small">Категории выводятся по порядку (1.. 2.. 3..)</span>
                </div>
                <div class="form-group">
                    <label>URL адрес:</label>
                    <input type="text" class="form-control form-control-lg" disabled value="{{ $category->url }}" placeholder="Название категории" />
                    <span class="text-small"><b class="text-danger">*</b> Ссылка генерируется автоматически!</span>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-dark">Применить изменения</button>
                </div>
            </div>
        </div>
    </form>

@endsection