@extends('layout.app')
@section('content')
    <div class="row">
        <div class="col-lg-12 d-flex align-items-center mt-3">
            <h2>Список проектов</h2>
            <a class="btn btn-primary mx-3" href="{{ route('projects.create') }}">Добавить проект</a>
        </div>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    @if(count($projects) !== 0)
        <table>
            <thead>
            <tr>
                <th>Название</th>
                <th>Описание</th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach($projects as $project)
                <tr>
                    <td>{{$project->projectName}}</td>
                    <td></td>
                    <td>
                        <a class="btn btn-light" href="{{ route('projects.show',$project->id) }}">Подробнее</a>
                    </td>
                    <td>
                        <a class="btn btn-primary" href="{{ route('projects.edit',$project->id) }}">Изменить</a>
                    </td>
                    <td>
                        <form action="{{ route('projects.destroy', $project->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Удалить</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @else
        <div class="alert alert-secondary">
            Ещё не добавлено ни одного проекта
        </div>
    @endif
@endsection
